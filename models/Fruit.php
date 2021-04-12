<?php

include("./Sellable.php");
class Fruit extends Sellable{

    function __construct($id,$name,$quantity,$date){
        Sellable::__construct($id,$name,$quantity,$date);
       
    }

   


 



}



?>