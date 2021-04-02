<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kioskas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo " connection failed";
        die;
    }
    
    return $conn;
}

 function getAll()
 {
    $sql = "SELECT * from `vegetables`";
    return connect()->query($sql);
 }

function getById($id){
    $sql = "SELECT * from `vegetables` where id =".$id;

    $result =  connect()->query($sql);
    $vegetable = '';
    while ($row = $result->fetch_assoc()) {
        $vegetable = $row;
    }
    return $vegetable;
}
function update($request){
    $id = $request['id'];
    $name = $request['name'];
    $quantity = $request['quantity'];
    $date = $request['date'];


    $sql = "UPDATE `vegetables` 
        SET `name` = '".$name."', `quantity` = '".$quantity."', `date` = '".$date."' 
        WHERE `vegetables`.`id` = ".$id.";";
    connect()->query($sql);
    header('location:./home.php');
    die;
}

function store($request){
    $name = $request['name'];
    $quantity = $request['quantity'];
    $date = $request['date'];

    $sql = "INSERT 
        INTO `vegetables` (`id`, `name`, `quantity`, `date`) 
        VALUES (NULL, '".$name."', '".$quantity."', '".$date."');";
    connect()->query($sql);
    header('location:./home.php');
    die;
}
    function destroy($request)
    {
        $sql = "DELETE FROM `vegetables` WHERE `vegetables`.`id` =".$request['id'];
        connect()->query($sql);
        header('location:./home.php');
        die;
    }



?>