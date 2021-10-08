<?php
namespace Controllers;

use \Core\Controller;
use Models\Users;

class LoginController extends Controller {
    private $arrayInfo = array();

    public function index() {
        $this->arrayInfo['error'] = '';
        $this->loadView('login', $this->arrayInfo);
    }

    public function login(){

        if(!empty($_POST['user_email']) && !empty($_POST['user_password'])) {
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];

            $user = new Users();
            $user->createUser();
            if($user->validateLogin($email, $password)){
                header("Location: ".BASE_URL);
                exit;
            }else{
                $_SESSION['errorLoginMsg'] = 'Usuário e/ou senha vazios ou incorretos!';
            }
        }
        header("Location: ".BASE_URL."login");
        exit;
    }

    public function logout(){
        unset($_SESSION['uidToken']);
        header("Location: ".BASE_URL);
        exit;
    }

}