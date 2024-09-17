<?php
session_start();
include '../../data.php';
$connect = $con;
if(isset($_POST["id"])){
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE tobuy SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
    }
?>