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
namespace Keosu\Gadget\MyAccountGadgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * REST Service controller dedicated to the curent gadget
 * @author vleborgne
 *
 */
class ServiceController extends Controller {

	public function infoAction() {
		$securityContext = $this->get('security.context');
		$user = $securityContext->getToken()->getUser();

		if($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
			$ret = array(
				'connect' => true,
				'type'    => $user->getAccountType(),
				'email'   => $user->getemail(),
				'username'=> $user->getUsername(),
			);
		} else {
			$ret = array(
				'connect' => false
			);
		}
		
		$response = new JsonResponse();
		$response->setData($ret);
		return $response;
	}
	
	public function passwordAction(Request $request) {
	
		$securityContext = $this->get('security.context');
		$userManager = $this->container->get('fos_user.user_manager');
		$user = $securityContext->getToken()->getUser();
	
		$ret['success'] = false;
		$ret['connect'] = false;
	
		if($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
		
			$ret['connect'] = true;
			
			$newpass = $request->request->get('newPassword');

			if(strlen($newpass) > 5) {
				
				$encoder_service = $this->get('security.encoder_factory');
				$encoder = $encoder_service->getEncoder($user);
				$encoded_pass = $encoder->encodePassword($newpass, $user->getSalt());
			
				if($encoded_pass == $user->getPassword()) {
					$user->setPlainPassword($newpass);
					$userManager->updateUser($user);
					$ret['success'] = true;
				} else {
					$ret['message'] = "Wrong old password";
				}
			} else {
				$ret['message'] = "A password must contain at least 6 characters";
			}
		} else {
			$ret['message'] = "You must be connected to access to this part of the application";
		}
		
		$response = new JsonResponse();
		$response->setData($ret);
		return $response;
	}
}

?>
