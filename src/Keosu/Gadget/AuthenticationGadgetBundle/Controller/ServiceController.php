<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

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

use Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller {

	public function initAction($gadgetId,$format) {
		$gadget = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();

		return new JsonResponse($gadgetConfig);
	}

	public function loginInitAction($gadgetId,$format) {

		$loggedRemembered = false;

		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$loggedRemembered = true;
		}
		if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
			$loggedRemembered = false;
		}

		return new JsonResponse(array(
			'csrf_token' => $this->getCsrfToken('authenticate'),
			'allReadyLogged' => $loggedRemembered
		));
	}

	public function logoutAction($gadgetId) {
	
		$ret['connect'] = false;
		
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

			$this->get('security.authorization_checker')->setToken(NULL);

			$em = $this->getDoctrine();
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
			$page = $gadget->getPage();
			$app = $em->getRepository('KeosuCoreBundle:App')->find($page->getAppId());
			
			$ret['appPrivate'] = false;
			$packageConfig = $app->getConfigPackages();
			if(isset($packageConfig[KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME]['privateApp'])
				&& $packageConfig[KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME]['privateApp']) {
				$ret['appPrivate'] = true;
			}
		}

		return new JsonResponse($ret);
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
					$validator = $this->container->get('validator');

					$constraints = array(
						new \Symfony\Component\Validator\Constraints\Email(),
						new \Symfony\Component\Validator\Constraints\NotBlank()
					);
					$errors = $validator->validate($request->request->get('email'), $constraints);

					if($errors == "") {
					
						$user->setPlainPassword($request->request->get('password'));
						$user->setEmail($request->request->get('email'));
						$user->setUsername($request->request->get('username'));
						$user->setAccountType('keosu');
						try {
							$userManager->updateUser($user);
							$success = true;
						} catch(\Exception $e) {
							$message = "Your email or your username is allready used";
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
		return new JsonResponse($response);
	
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

		return new JsonResponse($response);
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
