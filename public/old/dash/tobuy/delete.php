<?php
include '../../data.php';
$connect = $con;
if(isset($_POST["id"])){
 $query = "DELETE FROM tobuy WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Deleted';
 }
    }
?>