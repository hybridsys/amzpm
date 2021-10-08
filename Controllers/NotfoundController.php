<?php
namespace Controllers;

use \Core\Controller;

class NotfoundController extends Controller {
    private $arrayInfo = array();
    public function index() {
		$this->loadTemplate('404', $this->arrayInfo);
	}

}