<?php
include ("../../Controllers/FruitController.php");

  if($_SERVER['REQUEST_METHOD']=='POST'){
    destroy($_POST);
  }

  $vegetables = getAll();

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php include("../header.php") ?>

<a href="./create.php">sukurti</a>
<h2>Vaisiai</h2>
<div id="sum"></div>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>quantity</th>
    <th>expiration date</th>
    <th>edit</th>
    <th>delete</th>
  </tr>

  <?php

  $sum = 0;
  while ($row = $vegetables->fetch_assoc()) {
      $sum += $row['quantity'];
      echo '  <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['quantity'].'</td>
      <td>'.$row['date'].'</td>
      <td>
          <a href="./edit.php?id='.$row['id'].'">edit</a>
      </td>
      <td>
        <form action="" method="post">
          <input type="hidden" name="id" value="'.$row['id'].'">
          <button type="submit">delete</button>
        </form>
      </td>
    </tr>';
  }

  ?>

  
</table>
<script>
let overallSum = <?=$sum?>;
  document.getElementById("sum").innerHTML = overallSum;
  console.log(overallSum);
</script>
</body>
</html>
