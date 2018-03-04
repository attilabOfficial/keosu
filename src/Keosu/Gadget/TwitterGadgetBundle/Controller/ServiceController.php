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
namespace Keosu\Gadget\TwitterGadgetBundle\Controller;

use Keosu\CoreBundle\KeosuCoreBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * REST Service controller dedicated to the curent gadget
 */

class ServiceController extends Controller {

	public function getAllAction($search) {

		$result = array();

		$CONSUMER_KEY = urlencode('YOUR_CONSUMER_KEY'); // TODO: Put these in a a config file somewhere
		$CONSUMER_SECRET = urlencode('YOUR_CONSUMER_SECRET'); // TODO: Put these in a a config file somewhere
		$BASIC_AUTH = 'Basic ' . base64_encode($CONSUMER_KEY . ':' . $CONSUMER_SECRET);

		$curl = \curl_init();

    \curl_setopt($curl, CURLOPT_URL, 'https://api.twitter.com/oauth2/token');
		\curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		\curl_setopt($curl, CURLOPT_POST, 1);
		\curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
		\curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    	'Authorization: '.$BASIC_AUTH,
    	'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'
    ));

    $token = json_decode(\curl_exec($curl), true)['access_token'];

		\curl_close($curl);
		$curl = \curl_init();

		\curl_setopt($curl, CURLOPT_URL, 'https://api.twitter.com/1.1/search/tweets.json?q='.urlencode($search));
		\curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		\curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    	'Authorization: Bearer '.$token
    ));

		$result = json_decode(\curl_exec($curl), true);
		\curl_close($curl);

		return new JsonResponse($result);

	}

}

?>
