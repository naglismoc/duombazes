<?php
include("../../models/Vegetable.php");


 function getAll() {
    return Vegetable::findAll();
 }

function getById($id){
    return Vegetable::getById($id);
}
function update($request){
    $vegetable = new Vegetable();
    $vegetable->setId($request['id']);
    $vegetable->setName($request['name']);
    $vegetable->setQuantity($request['quantity']);
    $vegetable->setDate($request['date']);
    $vegetable->save();

    header('location:./home.php');
    die;
}


function store($request){
    $vegetable = new Vegetable();
    $vegetable->setName($request['name']);
    $vegetable->setQuantity($request['quantity']);
    $vegetable->setDate($request['date']);
    $vegetable->save();

    header('location:./home.php');
    die;
}
    function destroy($request)
    {
       $vegetable = Vegetable::getById($request['id']);
       $vegetable->delete();

        header('location:./home.php');
        die;
    }



?>