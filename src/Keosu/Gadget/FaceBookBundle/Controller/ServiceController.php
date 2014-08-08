<?php

namespace Keosu\Gadget\FaceBookBundle\Controller;

use Keosu\Gadget\FaceBookBundle\KeosuGadgetFaceBookBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

class ServiceController extends Controller
{
	public function loginFacebookAction($appId,Request $request) {

		$ret = array(
			'success' => false,
			'message' => 'unable to login with facebook'
		);
	
		if ($request->request->get('facebook_token') != null && 'POST' === $request->getMethod()) {

			$em = $this->getDoctrine();
			$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
			$configPackages = $app->getConfigPackages();
			$fbAppId = $configPackages[KeosuGadgetFaceBookBundle::PLUGIN_NAME]['fbAppId'];
			$fbAppSecret = $configPackages[KeosuGadgetFaceBookBundle::PLUGIN_NAME]['fbAppSecret'];
			
			FacebookSession::setDefaultApplication($fbAppId,$fbAppSecret);
			$session = new FacebookSession($request->request->get('facebook_token'));
			try {
				$session->validate();
				$user_profile = (new FacebookRequest($session, 'GET', '/me'))
					->execute()
					->getGraphObject(GraphUser::className());

				// user Email
				$email = $user_profile->getProperty('email');
				$userManager = $this->container->get('fos_user.user_manager');
				$user = $userManager->findUserByUsernameOrEmail($email);
				// the user doesn't have account
				if($user == null) {
					$user = $userManager->createUser();
					$user->setEnabled(true);
					$user->setPlainPassword(\md5($email.\rand()));
					$user->setEmail($email);
					$user->setAccountType('facebook');
					$userManager->updateUser($user);
				}
				
				if($user->getAccountType() == 'facebook') {
					// We log the user
					$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
					$this->get('security.context')->setToken($token);
					$this->get('session')->set('_security_main',serialize($token));
					$ret['success'] = true;
				} else {
					$ret['message'] = "This email is allready used with an other account";
				}
				
			} catch (FacebookRequestException $ex) {
			} catch (\Exception $ex) {}
		}

		$response = new JsonResponse();
		$response->setData($ret);
		return $response;
	}
}
