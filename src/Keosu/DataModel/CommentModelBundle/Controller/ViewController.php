<?php

namespace Keosu\DataModel\CommentModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
	public function viewAction() {
		$em = $this->get('doctrine')->getManager();
		$comments = $em->getRepository('KeosuDataModelCommentModelBundle:Comment')->findAll();
		return $this->render('KeosuDataModelCommentModelBundle::view.html.twig',
									array('comments' => $comments));
	}
}
