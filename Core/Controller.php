<?php
namespace Core;

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require 'Views/' . $viewName . '.php';
    }

	public function loadTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'Views/template.php';
/*        require 'Views/' . $viewName . '.php';*/

    }

	public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'Views/' . $viewName . '.php';
    }

}