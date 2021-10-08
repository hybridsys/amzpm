<?php
namespace Models;

use Core\Model;

class Users extends Model{

    public function createUser(){
        $sql = " SELECT count(0) as qtd FROM users";
        $dao = $this->db->prepare($sql);
        $dao->execute();
        $result = $dao->fetch();
        if($result['qtd'] == 0) {

            $sql = 'INSERT INTO users SET user_name = "admin@amzpm.com", user_password = "admin"';
            $dao = $this->db->prepare($sql);
            $dao->execute();
        }

    }
    public function validateLogin($user_name, $user_password){
        $result = false;
        $sql = "SELECT * FROM users WHERE user_name = :user_name";
        $dao = $this->db->prepare($sql);
        $dao->bindValue(":user_name", $user_name);
        $dao->execute();

        if($dao->rowCount() > 0) {
            $data = $dao->fetch();

            if ($data['user_name'] . $data['user_password'] == $user_name.$user_password) {
                $token = md5(time() . rand(0, 9999) . session_id() . $data['useremail']);
                $sql = "UPDATE users SET user_token = :token WHERE id = :id";
                $dao = $this->db->prepare($sql);
                $dao->bindValue(':token', $token);
                $dao->bindValue(':id', $data['id']);
                $dao->execute();
                $_SESSION['uidToken'] = $token;
                $result = true;
            }
        }
        return $result;
    }

    public function isLogged() {
        $result = false;
        if(!empty($_SESSION['uidToken'])){
            $token = $_SESSION['uidToken'];
            $sql = "SELECT user_name  FROM users WHERE user_token = :token";
            $dao = $this->db->prepare($sql);
            $dao->bindValue('token', $token);
            $dao->execute();
            if($dao->rowCount() > 0) {
                $result = true;
            }
        }
        return $result;
    }


}