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
namespace Keosu\Gadget\AuthentificationGadgetBundle\Controller;

use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;


class ServiceController extends Controller {

	public function loginAction($gadgetId,$format) {
		$response = new JsonResponse();
		$response->setData(array(
			'csrf_token' => $this->getCsrfToken('authenticate')
		));
		return $response;
	}
	
	
	public function registerAction($gadgetId,$format,Request $request) {

		$action = "register";

		/** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
		$userManager = $this->container->get('fos_user.user_manager');

		$user = $userManager->createUser();
		$user->setEnabled(true);

		if ('POST' === $request->getMethod()) {
		
			$success = false;
			$message = "";
		
			if($this->checkCsrfToken($action,$request->request->get('csrf_token'))) {
			
				if($request->request->get('password') == $request->request->get('password2')) {
				
					if(strlen($request->request->get('password'))> 5) {

						// check email
						$emailConstraint = new EmailConstraint();
						$errors = $this->get('validator')->validateValue($request->request->get('email'),$emailConstraint);

						if($errors == "") {
						
							$user->setUsername($request->request->get('username'));
							$user->setPlainPassword($request->request->get('password'));
							$user->setEmail($request->request->get('email'));
							try {
								$userManager->updateUser($user);
								$success = true;
							} catch(\Exception $e) {
								$message = "Username or User mail already exist";
							}
						} else {
							$message = "Invalid email";
						}
					} else {
						$message = "a password must contain at least 5 characters";
					}
				} else {
					$message = "passwords don't match";
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
