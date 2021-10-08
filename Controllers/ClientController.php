<?php
namespace Controllers;
use Core\Controller;
use Models\Client;
use Models\Users;
class ClientController extends Controller
{
    private $client;
    private $user;
    private $arrayInfo=array();

    public function __construct(){
        $this->user = new Users();
        $this->client = new Client();
        if(!$this->user->isLogged()){
            header('Location:'.BASE_URL);
            exit;
        }
    }

    public function insert(){
        $this->loadTemplate('clientform', $this->arrayInfo);
    }

    public function save(){
        $client = new Client();
        try {
            $clientData = array(
                'client_name' => isset($_POST['client_name']) ? $_POST['client_name'] : '',
                'client_zipcode' => isset($_POST['client_zipcode']) ? $_POST['client_zipcode'] : '',
                'client_address' => isset($_POST['client_address']) ? $_POST['client_address'] : '',
                'client_neighborhood' => isset($_POST['client_neighborhood']) ? $_POST['client_neighborhood'] : '',
                'client_city' => isset($_POST['client_city']) ? $_POST['client_city'] : '',
                'client_state' => isset($_POST['client_state']) ? $_POST['client_state'] : '',
                'client_phone' => isset($_POST['client_phone']) ? $_POST['client_phone'] : '',
                'client_email' => isset($_POST['client_email']) ? $_POST['client_email'] : '',
                'id' => isset($_POST['id']) ? $_POST['id'] : 0
            );

            if (isset($_POST['id'])) {
                $result = $client->updateClient($clientData);
            } else {
                $result = $client->insertClient($clientData);
            }
        }catch (\Exception $ex){
            echo $ex->getMessage();
        }

        if($result){
            $_SESSION['savemessage'] = 'Cliente salvo com sucesso!';
        }else{
            $_SESSION['saveerrormessage'] = 'Erro ao salvar o cliente';
        }
        header("Location: " . BASE_URL);
        exit;

    }

    public function edit($id){
        $client = new Client();
        $result = $client->getClientById($id);
        $this->arrayInfo['client'] = $result;
        $this->arrayInfo['clientID'] = $id;
        $this->loadTemplate('clientform', $this->arrayInfo);
        if(isset($result['client_name'])&&(!empty($result['client_name']))){
        }else{
            header("Location: ".BASE_URL);
            exit;
        }
    }

    public function delete($id){
        $client = new Client();
        $client->deleteClient($id);
        header("Location: ".BASE_URL);
        exit;
    }

}