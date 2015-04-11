<?php

namespace Mvc;

use Inspector\Controller;
use Inspector\Controller\Route;

abstract class AbstractController implements MvcInterface
{
	public function getInspector(MvcInterface $controller)
	{
		$inspectorController = new Controller();
		$inspectorController->setObject($controller);
		return $inspectorController;
	}

	public function validate(Route $route, $uri, $method){
		$route->getRoute() == $uri ? $this->{$method}() : null;		
	}
}