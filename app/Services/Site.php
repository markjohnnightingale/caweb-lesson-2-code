<?php

namespace App\Services;

use App\Controllers\Error404Controller;
use App\Controllers\ContactFormController;

class Site
{
	private $routes = [
		'/'		=> ContactFormController::class . '@index',
		'form/submit'	=> ContactFormController::class . '@submit',
		'form/requests' => ContactFormController::class . '@list',
	];

	public function run()
	{
		if (!($_GET && $_GET['p'])) {
			// If no P is set in the URL, 
			$p = '/';
		} else {
			$p = $_GET['p'];
		}
		$controller = $this->getControllerName($p);
		$this->loadController($controller);
	}

	private function loadController($controller)
	{
		$array = explode('@', $controller);
		$initController = new $array[0]();
		$initController->{$array[1]}();
	}

	private function getControllerName($route)
	{
		if (array_key_exists($route, $this->routes)) {
			return $this->routes[$route];
		} else {
			return Error404Controller::class . '@index';
		}
	}
}
