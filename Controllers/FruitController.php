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
    $sql = "SELECT * from `fruits`";
    return connect()->query($sql);
 }

function getById($id){
    $sql = "SELECT * from `fruits` where id =".$id;

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


    $sql = "UPDATE `fruits` 
        SET `name` = '".$name."', `quantity` = '".$quantity."', `date` = '".$date."' 
        WHERE `fruits`.`id` = ".$id.";";
    connect()->query($sql);
    header('location:./home.php');
    die;
}

function store($request){
    $name = $request['name'];
    $quantity = $request['quantity'];
    $date = $request['date'];

    $sql = "INSERT 
        INTO `fruits` (`id`, `name`, `quantity`, `date`) 
        VALUES (NULL, '".$name."', '".$quantity."', '".$date."');";
    connect()->query($sql);
    header('location:./home.php');
    die;
}
    function destroy($request)
    {
        $sql = "DELETE FROM `fruits` WHERE `fruits`.`id` =".$request['id'];
        connect()->query($sql);
        header('location:./home.php');
        die;
    }



?>