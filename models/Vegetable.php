<?php

include("Sellable.php");
include("Dbh.php");
class Vegetable extends Sellable{

    function __construct(){
        Sellable::__construct();
       
    }
    public function delete(){
        $Dbh = new Dbh();
        $sql = "DELETE FROM `vegetables` WHERE `vegetables`.`id` =".$this->getId();
        $Dbh->connect()->query($sql);
    }

    public function save(){
        $Dbh = new Dbh();

        $sql = "UPDATE `vegetables` 
        SET `name` = '".$this->getName()."', `quantity` = '".$this->getQuantity()."', `date` = '".$this->getDate()."' 
        WHERE `vegetables`.`id` = ".$this->getId().";";

    if($this->getId() == null){
        $sql = "INSERT 
        INTO `vegetables` (`id`, `name`, `quantity`, `date`) 
        VALUES (NULL, '".$this->getName()."', '".$this->getQuantity()."', '".$this->getDate()."');";
    }

        $Dbh->connect()->query($sql);
 
}

    public static function findAll(){
        $Dbh = new Dbh();
        $sql = "SELECT * from `vegetables`";
        return $Dbh->connect()->query($sql);
    }
    
    public static function getById($id){
        $Dbh = new Dbh();
        $sql = "SELECT * from `vegetables` where id =".$id;
        $result =  $Dbh->connect()->query($sql);
        $vegetable = '';
        while ($row = $result->fetch_assoc()) {

            $vegetable = new Vegetable();
            $vegetable->setId($row['id']);
            $vegetable->setName($row['name']);
            $vegetable->setQuantity($row['quantity']);
            $vegetable->setDate($row['date']);
             
        }
        return $vegetable;
    }

}



?>