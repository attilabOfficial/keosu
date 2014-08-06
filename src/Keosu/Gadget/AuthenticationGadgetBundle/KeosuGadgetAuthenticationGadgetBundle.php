<?php

namespace Keosu\Gadget\AuthenticationGadgetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KeosuGadgetAuthenticationGadgetBundle extends Bundle
{
	const PACKAGE_NAME = 'keosu-authentication';

	/**
	 * Specific template for private app
	 */
	const AUTHENTICATION_TEMPLATE_ID = 'keosu-authentication-template-special.html';

	const AUTHENTICATION_PAGE_NAME = 'authenticationPage';
}
