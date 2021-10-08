<?php
namespace Controllers;

use Core\Controller;
use Models\Client;
use Models\Users;

class HomeController extends Controller {
    private $client;
    private $arrayInfo = array();
    private $user;
    public function __construct(){
        $this->user = new Users();
        if(!$this->user->isLogged()){
            header('Location: '. BASE_URL.'login');
        }
    }
    public function index() {
        $client = new Client();
        $this->arrayInfo['clients'] = $client->getClientList();
		$this->loadTemplate('home', $this->arrayInfo);
	}

}