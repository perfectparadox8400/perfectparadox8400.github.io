<?php
session_start();
include '../../data.php';
$connect = $con;
if(isset($_POST["username"], $_POST["password"], $_POST["type"]))
{
    if($_POST["type"] == "A"){
     if($_SESSION['type'] == "A"){
       $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $type = mysqli_real_escape_string($connect, $_POST["type"]);
 $query = "INSERT INTO login(username, password, type) VALUES('$username', '$password', '$type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
        }else{
          echo '<div id="suubmit">You can not add a Admin!</div><script>
    function runn(){
    var element = document.getElementById("div1");
    element.classList.add("alert-danger");
    element.classList.remove("alert-success");} runn();</script>';   
        }    
    }else{
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $type = mysqli_real_escape_string($connect, $_POST["type"]);
 $query = "INSERT INTO login(username, password, type) VALUES('$username', '$password', '$type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
    }
}
?>