<?php
include ("../../Controllers/VegetableController.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        update($_POST);
    }

    $vegetable = getById($_GET['id']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("../header.php") ?>
    <form action="" method="post">
        <input type="text" name="name" value=<?=$vegetable->getName()?>>
        <input type="text" name="quantity" value=<?=$vegetable->getQuantity()?> >
        <input type="text" name="date" value=<?=$vegetable->getDate()?>>
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <button type="submit">išsaugoti</button>
    </form> 
</body>
</html>