<?php
include '../../data.php';
$connect = $con;
if(isset($_POST["id"]))
{
    if($_POST["id"] == "3"){
        echo '<div id="suubmit">You can not deleted Admin Allan!</div><script>
    function runn(){
    var element = document.getElementById("div2");
    element.classList.add("alert-danger");
    element.classList.remove("alert-success");} runn();</script>';
    }else{
 $query = "DELETE FROM login WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Successfully Deleted!';
 }
    }
}
?>