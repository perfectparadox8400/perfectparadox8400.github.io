<?php
session_start(); 
include 'data.php';
if(!isset($_SESSION['usern'])){
    $show = false;
    header('location:/');
} else {
    $show = true;
    if ($_SESSION['type'] == "G"){
    header('location:/');
    }
}

?>
<html lang="en" width="100%">
    <head>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta charset="utf-8">
  <!-- Favicons -->
  <link href="/img/lll.png" rel="icon">
  <link href="/img/lll.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/my.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  </head>
  <style>
   @-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }
  to { 
    -webkit-transform: rotate(360deg);
  }
}
    .lode {
        height: 100% !important;
        transition: all 0.5s;
    }
    .lod {
        display: none !important;
        transition: all 0.5s;
    }
    .bigg {
        margin-left: 25% !important;
        margin-right: 25% !important;
       width: 50% !important;
       -webkit-animation-name:            rotate; 
    -webkit-animation-duration:        3s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    transition: all 0.5s;
    }
    .float-center {
       margin-top: 8% !important;
       transition: all 0.5s;
    }
    .loder {
        width: 80%;
        transition: all 0.5s;
    }
    .fixx {
        position: relative;
    }
    .lodbar {
        width: 125%;
        transition: all 0.5s;
        background-color: #afb0b3;
        height: auto;
        border-radius: 5px;
    }
    .persent {
        width: 0%;
        transition: all 0.5s;
        background-color: #5e068a;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        border-radius: 5px;
    }
#headerrr{
  width: 100%;  
}
#headerrrr{
  margin-top: 80px;
  transition: all 0.5s;
}
.scroledh{
  margin-top: 60px;
  transition: all 0.5s;  
}
    </style>
     <script>
 function disableScrolling(){
    var x = window.scrollX;
    var y = window.scrollY;
    window.onscroll=function(){window.scrollTo(x, y);};
    $('body').bind('touchmove', function(e){e.preventDefault()})
}
function enableScrolling(){
    window.onscroll=function(){};
    $('body').unbind('touchmove')
}
disableScrolling();
</script>
 <header id="headerrr" class="fixed-top lode">
    <div class="container" class="fixed-top">
      <div id="lode" class="logo float-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
         <a>
                <img id="headerr" class="bigg" src="img/l.png" heigth="100%">
                <div id="lod" class="lod" style=display:inline-block;vertical-align:center>
                    <a href="/">&nbsp;Perfect Paradox's 8400</a>
                    </div>
                    </a>
      <div id="dlod" class="loder">
          <div class="fixx">
          <div class="float-center lodbar"><p>&nbsp;Loding...</p>
          <div id="barr" class="persent">&nbsp;</div>
             </div>
         </div>
        </div>
      </div>
      <script>
      var w = 5;
var mylod = setInterval(myTimer, 1000);
function myTimer() {
    if(w>100) {
      myStopFunction();
  } else{
  w = w + 6.25;
    document.getElementById('barr').style.width = w + '%';
  }
}
function myStopFunction() {
  clearInterval(mylod);
}
      </script>
      <nav id="lood" class="lod main-nav float-right d-none d-lg-block header">
        <ul>
          <li class="drop-down"><a>Home</a>
          <ul>
          <li><a href="/#about">About Us</a></li>
              <li><?php if ($show == false){ echo'<a onclick="document.getElementById(`popuplog`).style.display=`block`" href="/#portfolio">Portfolio</a>';}else{ echo'<a href="/#portfolio">Portfolio</a>';}?></li>
              <li><a href="/#team">Team</a></li>
            </ul> 
          </li>
          <li class="drop-down" ><a>FTC</a>
          <ul>
               <li><a href="/">FTC Page</a></li>
                  <li>
                      <a href="https://www.firstinspires.org/community/">FTC At Home</a>
                      </li>
                  <li><a href="https://www.firstinspires.org/robotics/ftc">About FTC</a></li>
                </ul>
          </li>
          <li class="drop-down"><a>More</a>
            <ul>
              <li><a href="https://perfectparadox8400.wixsite.com/mysite">Old Website</a>
              </li>
              <li><?php if ($show == true){ if ($_SESSION['type'] == "G"){echo'<li><a href="end.php">Logout</a></li>';} else {echo'<a href="/#">More</a>';}}else{ echo'<a onclick="document.getElementById(`popuplog`).style.display=`block`" href="/#">Login</a>';}?>
              </li>
            </ul>
          </li>
          <li><a href="/#contact">Contact Us</a></li>
          <?php if ($show == true){ if ($_SESSION['type'] == "G"){echo'';} else if ($_SESSION['type'] == "J"){echo'<li class="drop-down"><a>Judge',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi Judge,</a></li>
               <li class="drop-down"><a href="dashbord.php">Judge',"'",'s Dashboard</a>
               <ul>
               <li><a style="cursor: pointer;" onClick="urlChange(`/dash/`,`ok`)">Main Dashbord</a></li>
               </ul></li>
              </li>
              </ul>';} else if ($_SESSION['type'] == "T"){ echo'<li class="drop-down"><a>Team Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li class="drop-down"><a href="dashbord.php">Team Dashboard</a>
               <ul>
                <li><a style="cursor: pointer;" onClick="urlChange(`/dash/`,`ok`)">Main Dashbord</a></li>
               <li><a style="cursor: pointer;" onClick="urlChange(`/dash/tobuy/`,`ok`,`Things To Buy`)">Things To Buy</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://mail.google.com/mail/u/perfectparadox8400@gmail.com/">Gmail</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://drive.google.com/drive/u/perfectparadox8400@gmail.com/my-drive">Google Drive</a></li>
               </ul></li>
              </li>
              </ul>';}else if ($_SESSION['type'] == "M"){ echo'<li class="drop-down"><a>Coache',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li class="drop-down"><a href="dashbord.php">Coache',"'",'s Dashboard</a>
               <ul>
                <li><a style="cursor: pointer;" onClick="urlChange(`/dash/`,`ok`)">Main Dashbord</a></li>
                <li><a style="cursor: pointer;" onClick="urlChange(`/dash/account/`,`ok`,`Edit Accounts`)">Edit Accounts</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://mail.google.com/mail/u/perfectparadox8400@gmail.com/">Gmail</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://drive.google.com/drive/u/perfectparadox8400@gmail.com/my-drive">Google Drive</a></li>
               <li><a style="cursor: pointer;" onClick="urlChange(`/dash/tobuy/`,`ok`,`Things To Buy`)">Things To Buy</a></li>
               </ul></li>
              </li>
              </ul>';}else if ($_SESSION['type'] == "A"){ echo'<li class="drop-down"><a>Admin',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li class="drop-down"><a href="dashbord.php">Admin',"'",'s Dashboard</a>
               <ul>
                <li><a style="cursor: pointer;" onClick="urlChange(`/dash/`,`ok`)">Main Dashbord</a></li>
                <li><a style="cursor: pointer;" onClick="urlChange(`/dash/account/`,`ok`,`Edit Accounts`)">Edit Accounts</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://mail.google.com/mail/u/perfectparadox8400@gmail.com/">Gmail</a></li>
               <li><a style="cursor: pointer;" target="_blank" href="https://drive.google.com/drive/u/perfectparadox8400@gmail.com/my-drive">Google Drive</a></li>
               <li><a style="cursor: pointer;" onClick="urlChange(`/dash/tobuy/`,`ok`,`Things To Buy`)">Things To Buy</a></li>
               </ul></li>
              </li>
              </ul>';}}else{ echo'';}?>
              <li><a href="end.php">Logout</a>
          </li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->
  <div id="headerrrr"></div>
  <iframe height="100%" id="ok" frameBorder="0" style="width: 100%;" src="/dash/"></iframe>
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/my.js"></script>
<link href="/css/1.css" rel="stylesheet">
<script>
window.onmessage = (z) => {
  if (z.data.hasOwnProperty("link")) {
      
      urlChange(`${z.data.link}`,`ok`,`${z.data.title}`);
  }
  if (z.data.hasOwnProperty("frameHeight")) {
    document.getElementById("ok").style.height = `${z.data.frameHeight}px`;
  }
};
function urlChange(url,iframe,ti) {
    var id = iframe;
    document.getElementById(id).src = url;
    var finn;
     var tit = ti+" - Team Dashboard | Perfect Paradox 8400";
    finn = tit;
    if(ti == null){
        finn = 'Team Dashboard | Perfect Paradox 8400';
    }else{
        finn = ti +' | Perfect Paradox 8400';
    }
    document.title = finn;
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
}
function tie(ti){
   document.title = ti +' | Perfect Paradox 8400'; 
}
var type = "<?php echo $_SESSION['type'];?>";
if(type == "A"){
    tie("Admin's Dashboard");
}else if(type == "M"){
    tie("Coache's Dashboard");
}else if(type == "T"){
    tie('Team Dashboard');
}else if(type == "J"){
    tie("Judge's Dashboard");
}
  </script>
<script>
    $(window).load(function() {
    console.log('images finished loading');
    w = 110;
    document.getElementById('barr').style.width = 125 + '%';
    setTimeout(function(){
    $('#dlod').addClass('lod');
    $('#headerr').removeClass('bigg');
    $('#headerrr').removeClass('lode');
    $('#lod').removeClass('lod');
    $('#lood').removeClass('lod');
    $('#llood').removeClass('lod');
    $('#lode').removeClass('float-center');
    $('#lode').addClass('float-left');
    enableScrolling();
}, 1500);
  });
</script>
    </html>