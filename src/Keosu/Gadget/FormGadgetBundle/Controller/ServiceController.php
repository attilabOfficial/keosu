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
namespace Keosu\Gadget\FormGadgetBundle\Controller;

use Keosu\CoreBundle\KeosuCoreBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Keosu\DataModel\FormModelBundle\Entity\FormResult;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * REST Service controller dedicated to the curent gadget
 */

class ServiceController extends Controller {

	public function viewOneAction($gadgetId) {

		$em = $this->get('doctrine')->getManager();
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->find($gadgetId);
		$gadgetConfig = $gadget->getConfig();

		$form = $em->getRepository('KeosuDataModelFormModelBundle:Form')->find($gadgetConfig['form-id']);

		$result = array(
			'id' => $form->getId(),
			'dataModelObjectName' => $form->getDataModelObjectName(),
			'name' => $form->getTitle()
		);

		$fields = $form->getFields();
		if(count($fields) > 0){
			foreach ($fields as $q => $field){
				$result['fields'][$q] = array(
					'id' => $field->getId(),
					'type' => $field->getType(),
					'text' => $field->getText(),
					'required' => $field->getRequired()
				);
			}
		}
		return new JsonResponse($result);
	}

	public function submitAction($formId, $email) {

		$em = $this->get('doctrine')->getManager();
		$form = $em->getRepository('KeosuDataModelFormModelBundle:Form')->find($formId);

		$userManager = $this->container->get('fos_user.user_manager');
		$user = $userManager->findUserByEmail($email);

		$data = json_decode(Request::createFromGlobals()->get('data'), true);

		$message = \Swift_Message::newInstance()
							 ->setSubject('[Keosu] ' . $form->getName())
							 ->setFrom($form->getMailFrom())
							 ->setTo($form->getMailTo())
							 ->setBody($this->renderView('KeosuGadgetFormGadgetBundle:Mail:mail.html.twig', array('form' => $form, 'data' => $data, 'user' => $user)), 'text/html');

		return new JsonResponse(array('success' => $this->get('mailer')->send($message)));

	}

	public function uploadAction($formId) {

		$file = Request::createFromGlobals()->files->get('photo');
		$fileName = md5(uniqid()).'.'.$file->guessExtension();
    $file->move(__DIR__.'/../../../../../web/uploads', $fileName);

    return new JsonResponse(array('uri' => $this->getParameter('url_base').'/uploads/'.$fileName));

	}

}

?>
