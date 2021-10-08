<?php
namespace Models;
use \Core\Model;

class Client extends Model
{
    public function getClientById($id){
        $result = array();
        $sql = "SELECT * 
                  FROM client WHERE id = :id";
        $dao = $this->db->prepare($sql);
        $dao->bindValue(':id', $id);
        $dao->execute();
        if($dao->rowCount() > 0){
            $result = $dao->fetch();
        }
        $dao = null;
        $this->db = null;
        return $result;
    }

    public function getClientList(){
        $result = array();
        $sql = "  SELECT * 
                    FROM client ";
        $dao = $this->db->prepare($sql);
        $dao->execute();
        if($dao->rowCount() > 0){
            $result = $dao->fetchAll();
        }
        $dao = null;
        $this->db = null;
        return $result;
    }

    public function insertClient($clientData){
        extract($clientData);
        $sql =  " INSERT INTO client SET 
                              client_name = :client_name
                            , client_address = :client_address
                            , client_neighborhood = :client_neighborhood
                            , client_city = :client_city
                            , client_state = :client_state
                            , client_zipcode = :client_zipcode
                            , client_phone = :client_phone
                            , client_email = :client_email";
        $dao = $this->db->prepare($sql);
        $dao->bindValue(':client_name', $client_name);
        $dao->bindValue( ':client_address', $client_address);
        $dao->bindValue( ':client_neighborhood', $client_neighborhood);
        $dao->bindValue( ':client_city', $client_city);
        $dao->bindValue( ':client_state', $client_state);
        $dao->bindValue( ':client_zipcode', $client_zipcode);
        $dao->bindValue( ':client_phone', $client_phone);
        $dao->bindValue( ':client_email', $client_email);
        $dao->execute();
        $dao = null;
        $this->db = null;

        return true;
    }
    public function updateClient($clientData){
        extract($clientData);
        $sql =  " UPDATE client SET 
                              client_name = :client_name
                            , client_address = :client_address
                            , client_neighborhood = :client_neighborhood
                            , client_city = :client_city
                            , client_state = :client_state
                            , client_zipcode = :client_zipcode
                            , client_phone = :client_phone
                            , client_email = :client_email
                   WHERE id = :id";

        $dao = $this->db->prepare($sql);
        $dao->bindValue(':client_name', $client_name);
        $dao->bindValue( ':client_address', $client_address);
        $dao->bindValue( ':client_neighborhood', $client_neighborhood);
        $dao->bindValue( ':client_city', $client_city);
        $dao->bindValue( ':client_state', $client_state);
        $dao->bindValue( ':client_zipcode', $client_zipcode);
        $dao->bindValue( ':client_phone', $client_phone);
        $dao->bindValue( ':client_email', $client_email);
        $dao->bindValue(':id', $id);

        if($dao->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function deleteClient($id){
        $result = false;
        try {
            $sql = " DELETE FROM client WHERE id = :id";
            $dao = $this->db->prepare($sql);
            $dao->bindValue(':id', $id);
            if ($dao->execute()){
                return true;
            }else{
                return false;
            }
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }
}