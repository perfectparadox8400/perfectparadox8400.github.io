<?php
session_start();
include '../../data.php';
$connect = $con;
if(isset($_POST["id"]))
{
    if($_POST["id"] == "3"){
        if($_SESSION['type'] == "A"){
       $value = mysqli_real_escape_string($connect, $_POST["value"]);
       $query = "UPDATE login SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
       if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
        }else{
         echo '<div id="suubmit">You can not edit Admin Allan!</div><script>
    function runn(){
    var element = document.getElementById("div1");
    element.classList.add("alert-danger");
    element.classList.remove("alert-success");} runn();</script>';    
        }
    }else{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE login SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
    }
}
?>