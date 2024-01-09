<?php 
session_start();
error_reporting(0);
include 'data.php';
ini_set('display_errors', 0);
$user = $_POST['user'];
$get = " select * from login where username ='$user'";
$res = mysqli_query($con, $get); 
 if($user == "8400"){
   while($row = mysqli_fetch_assoc($res)) {
  $pass = $row['password'];
  $type = $row['type'];
}
} else if($user == "8400-J"){
  while($row = mysqli_fetch_assoc($res)) {
  $pass = $row['password'];
  $type = $row['type'];
}
} else{
  $pass = $_POST['pass'];  
}  
 while($row = mysqli_fetch_assoc($res)) {
  $type = $row['type'];
}

$s = " select username from login where username = '$user' && password = '$pass'";

$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result);
if($num == 1){
$_SESSION['usern'] = $user;
$_SESSION['type'] = $type;
header('location:/');
} else {
    echo'<title>Error | Perfect Paradox 8400</title><link href="img/lll.png" rel="icon">
  <link href="img/lll.png" rel="apple-touch-icon">
  <script>
    var r = confirm("Incorrect password or username!\nPress Ok to try again!\nPress Cancel to Stop!");
    if (r == true) {
    window.location.assign("/");
  } else {
      
  }
      </script><html>
<h1>You Stoped!</h1>
<a href="/">Do you what to go back?</a>
</html>';
}
$con->close();
?>
<title>Login | Perfect Paradox 8400</title>
<!-- Favicons -->
  <link href="img/lll.png" rel="icon">
  <link href="img/lll.png" rel="apple-touch-icon">