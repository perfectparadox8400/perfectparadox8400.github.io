<?php
include '../../data.php';
$connect = $con;
if(isset($_POST["username"], $_POST["password"], $_POST["type"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $type = mysqli_real_escape_string($connect, $_POST["type"]);
 $query = "INSERT INTO tobuy(username, password, type) VALUES('$username', '$password', '$type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>