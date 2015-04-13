<?php

namespace Mvc;

use Inspector\Controller;
use Inspector\Controller\Route;

abstract class AbstractController implements MvcInterface {

    protected $params = array();

    public function getInspector(MvcInterface $controller) {
        $inspectorController = new Controller();
        $inspectorController->setObject($controller);
        return $inspectorController;
    }

    public function validate(Route $route, $method) {
        if ($route->getRoute()) {
            $this->setParam($route->getParams());
            $this->{$method}();
        }
    }

    public function setParam(array $data) {
        $this->params = $data;
    }

    public function getParams() {
        return $this->params;
    }

}
