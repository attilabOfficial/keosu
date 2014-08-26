<?php

namespace Keosu\UserBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KeosuUserBundle extends Bundle {
	function getParent() {
		return "FOSUserBundle";
	}
}


