<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/
namespace Keosu\Gadget\AuthenticationGadgetBundle\Controller;

use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\RequestException;

class ServiceController extends Controller {

	public function initAction($gadgetId,$format) {
		$gadget = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();

		$response = new JsonResponse();
		$response->setData($gadgetConfig);
		return $response;
	}

	public function loginInitAction($gadgetId,$format) {

		$loggedRemembered = false;

		$securityContext = $this->container->get('security.context');
		if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
			$loggedRemembered = true;
		}
		
		$response = new JsonResponse();
		$response->setData(array(
			'csrf_token' => $this->getCsrfToken('authenticate'),
			'allReadyLogged' => $loggedRemembered
		));
		return $response;
	}
	
	public function loginFacebookAction($gadgetId,Request $request) {

		$ret = array('success' => false);
	
		if ($request->request->get('facebook_token') != null && 'POST' === $request->getMethod()) {

			$em = $this->getDoctrine();
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
			$page = $gadget->getPage();
			$app = $em->getRepository('KeosuCoreBundle:App')->find($page->getAppId());
			
			FacebookSession::setDefaultApplication($app->getFacebookAppId(),$app->getFacebookAppSecret());
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
					$ret['error'] = true;
					$ret['message'] = "This email is allready used with an other account";
				}
				
			} catch (FacebookRequestException $ex) {
			} catch (\Exception $ex) {}
		}

		$response = new JsonResponse();
		$response->setData($ret);
		return $response;
	}
	
	public function logoutAction($gadgetId) {
	
		$ret['connect'] = false;
		
		$securityContext = $this->container->get('security.context');
		if($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {

			$securityContext->setToken(NULL);

			$em = $this->getDoctrine();
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
			$page = $gadget->getPage();
			$app = $em->getRepository('KeosuCoreBundle:App')->find($page->getAppId());
			
			$ret['appPrivate'] = false;
			if($app->isPrivate()) {
				$ret['appPrivate'] = true;
			}
		}

		$response = new JsonResponse();
		$response->setData($ret);
		return $response;
	}
	
	
	public function registerAction($gadgetId,$format,Request $request) {

		// for csrf token
		$action = "register";

		/** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
		$userManager = $this->container->get('fos_user.user_manager');

		$user = $userManager->createUser();
		$user->setEnabled(true);

		if ('POST' === $request->getMethod()) {
		
			$success = false;
			$message = "";
		
			if($this->checkCsrfToken($action,$request->request->get('csrf_token'))) {
				
				if(strlen($request->request->get('password'))> 5) {

					// check email
					$emailConstraint = new EmailConstraint();
					$errors = $this->get('validator')->validateValue($request->request->get('email'),$emailConstraint);

					if($errors == "") {
					
						$user->setPlainPassword($request->request->get('password'));
						$user->setEmail($request->request->get('email'));
						$user->setAccountType('keosu');
						try {
							$userManager->updateUser($user);
							$success = true;
						} catch(\Exception $e) {
							$message = "Your email is allready used";
						}
					} else {
						$message = "Invalid email";
					}
				} else {
					$message = "a password must contain at least 6 characters";
				}
			} else {
				$message = "invalid csrf token";
			}
			
			if($success) {
				$response = array('success'=>true);
			} else {
				$response = array(
					'success'=> false,
					'message'=> $message
				);
			}
		} else {
			$response = array(
				'csrf_token'=> $this->getCsrfToken($action)
			);
		}

		$resp = new JsonResponse();
		$resp->setData($response);
		return $resp;
	
	}
	
	public function forgotPasswordAction($gadgetId, $format,Request $request) {

		$username = $request->request->get('username');

		/** @var $user UserInterface */
		$user = $this->container->get('fos_user.user_manager')->findUserByUsernameOrEmail($username);

		if (null === $user) {
			$response = array(
				'message' => $username.' is an invalid username',
				'success' => false);
		} else if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
			$response = array(
				'message' => 'Request already send',
				'success' => false);
		} else {

			if (null === $user->getConfirmationToken()) {
			/** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
				$tokenGenerator = $this->container->get('fos_user.util.token_generator');
				$user->setConfirmationToken($tokenGenerator->generateToken());
			}

			$this->container->get('fos_user.mailer')->sendResettingEmailMessage($user);
			$user->setPasswordRequestedAt(new \DateTime());
			$this->container->get('fos_user.user_manager')->updateUser($user);

			$response = array(
				'success' => true
			);
		}
		
		$resp = new JsonResponse();
		$resp->setData($response);
		return $resp;
	}
	
	private function getCsrfToken($action) {
		return $this->container->has('form.csrf_provider')
			? $this->container->get('form.csrf_provider')->generateCsrfToken($action)
			: null;
	}
	
	private function checkCsrfToken($action,$token) {
		return $this->container->has('form.csrf_provider')
			? $this->container->get('form.csrf_provider')->isCsrfTokenValid($action,$token)
			: true;
	}

}
