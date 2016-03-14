<?php

namespace Keosu\Gadget\CommentGadgetBundle\Controller;

use Keosu\CoreBundle\KeosuExtension;
use Keosu\Gadget\CommentGadgetBundle\Entity\Comment;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
	public function commentAction($idDataModel,$dataModelObjectName, Request $request)
	{
		$ret = array();
		$ret["connect"] = false;
		$em = $this->getDoctrine()->getManager();

		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			$ret["connect"] = true;
		}
		$dataModel = $em->getRepository(KeosuExtension::$dataModelList[$dataModelObjectName])->find($idDataModel);

		if($request->getMethod() === 'POST' && $request->request->get('message') != "undefined"
				&& $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') && $dataModel != null && $dataModel->getEnableComments()) {
			$comment = new Comment();
			$comment->setMessage($request->request->get('message'));
			$comment->setDataModelObject($dataModelObjectName);
			$comment->setIdDataModel($idDataModel);
			$comment->setUser($this->get('security.token_storage')->getToken()->getUser());
			$em->persist($comment);
			$em->flush();
		}

		$comments = $em->getRepository('KeosuGadgetCommentGadgetBundle:Comment')->findCommentForModel($idDataModel,$dataModelObjectName);
		$tmp = array();
		$ret['comments'] = array();
		foreach($comments as $comment) {
			$tmp['message'] = $comment->getMessage();
			$tmp['date'] = $comment->getDate()->format('Y-m-d H:i');
			$tmp['user'] = $comment->getUser()->getUsername();
			$ret['comments'][] = $tmp;
		}

		return new JsonResponse($ret);
	}
}
