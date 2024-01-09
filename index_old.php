<?php
session_start();
if(!isset($_SESSION['usern'])){
    $show = false;
} else {
    $show = true;
}
?>
<!DOCTYPE html>
<html lang="en" width="100%">
<head>
 <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta charset="utf-8">
  <title>Home | Perfect Paradox 8400</title>
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
  <script>
   if(window == window.top) {
} else{
 document.location.href = "/lib/404.php";   
}
  </script>
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
    </style>
</head>
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
  <!--==========================
  Header
  ============================-->
  <div id="hi">
  <header id="headerrr" class="fixed-top lode">
    <div class="container" class="fixed-top">
      <div id="lode" class="logo float-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a>
                <img id="headerr" class="bigg" src="img/l.png" heigth="100%"><div id="lod" class="lod" style=display:inline-block;vertical-align:center><a href="/">&nbsp;Perfect Paradox's 8400</a></div></a>
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
          <li><a href="#about">About Us</a></li>
              <li><?php if ($show == false){ echo'<a onclick="document.getElementById(`popuplog`).style.display=`block`" href="#portfolio">Portfolio</a>';}else{ echo'<a href="#portfolio">Portfolio</a>';}?></li>
              <li><a href="#team">Team</a></li>
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
              <li><?php if ($show == true){ if ($_SESSION['type'] == "G"){echo'<li><a href="end.php">Logout</a></li>';} else {echo'<a href="#">More</a>';}}else{ echo'<a onclick="document.getElementById(`popuplog`).style.display=`block`" href="#">Login</a>';}?>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <?php if ($show == true){ if ($_SESSION['type'] == "G"){echo'';} else if ($_SESSION['type'] == "J"){echo'<li class="drop-down"><a>Judge',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi Judge,</a></li>
               <li><a href="dashbord.php">Judge',"'",'s Dashboard</a></li>
               <li><a href="end.php">Logout</a>
              </li>
              </ul>';} else if ($_SESSION['type'] == "T"){ echo'<li class="drop-down"><a>Team Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li><a href="dashbord.php">Team Dashboard</a></li>
               <li><a href="end.php">Logout</a>
              </li>
              </ul>';}else if ($_SESSION['type'] == "M"){ echo'<li class="drop-down"><a>Coache',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li><a href="dashbord.php">Coache',"'",'s Dashboard</a></li>
               <li><a href="end.php">Logout</a>
              </li>
              </ul>';}else if ($_SESSION['type'] == "A"){ echo'<li class="drop-down"><a>Admin',"'",'s Dashboard</a>
           <ul>
               <li><a>Hi ', $_SESSION['usern'],',</a></li>
               <li><a href="dashbord.php">Admin',"'",'s Dashboard</a></li>
               <li><a href="end.php">Logout</a>
              </li>
              </ul>';}}else{ echo'';}?>
          </li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-img">
        <img src="img/FTC_CompetionPic.jpg" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
         <h2></h2>
      <h2></h2>
        <h2>We are<br>Perfect Paradox<br></h2>
        <div>
          <h5 style="color:white;"
>FTC Team</h5>
          <a href="#about" class="btn-get-started scrollto">About</a>
          <a href="#contact" class="btn-services scrollto">Contact Us</a>
        </div>
      </div>
    </div>
  </section><!-- #intro -->
  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <img src="img/z.png" class="marginauto, re"/>
        <header class="section-header">
          <h3>About Us</h3>
          <p>We are the Perfect Paradox. Originally our team name was the Macro Raptors, and we had 5 members, Adien, Isacc, Izzy, and James. A few years ago the five of us were on a FLL team called the MicroBots, and we gt to go to a international invitational in Arkansas. But this year we got 4 new team members, Allan, Jene, Shaeden, and Marc. So with new people on the team, we chose a new team name, the Perfect Paradox</p>
        </header>
        </div>
        </section>
   <!-- #about -->
    <!--==========================
      Services Section
    ============================-->
    <!--==========================
      Why Us Section
    ============================-->
    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonials-carousel wow fadeInUp">
              <div class="testimonial-item">
                <img src="img/1m.png" class="testimonial-img" alt="">
                <h3>Briget</h3>
                <h4>Coache</h4>
                <p>
                  It’s an honor to be an FTC coach, even though my background is in outdoor education.  I got involved with First as an FLL coach six years ago. Last year Randamonium retired and mentored us to transition from an FLL team to a FTC team.  We learned a lot and loved it!  This year we grew by adding new team members with a wealth of experience, passion and dedication to FTC.  I love FTC because it challenges team members to be their best selves while building and programming a robot, managing projects, being First Ambassadors in our community, and working toward common goals.  We’re making connections, achieving goals, and paving the way to a brighter future! 
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/1/hl.png" class="testimonial-img" alt="">
                <h3>Heather</h3>
                <h4>Advisor</h4>
                <p>
                 My name is Heather Lambert and I am the Launch High School Advisor for the team. 
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/IMG-0925.JPG" class="testimonial-img" alt="">
                <h3>Lzzy</h3>
                <h4>Team Member</h4>
                <p>
                 My name is Elizabeth, I've been in first programs since I was in third grade. Isaac, James, Hannah, Aiden and I were all on an award winning First Lego League team, and last year we decided to get back together and become a First Tech Challenge team. I love FTC because I get to work with my friends, spend a lot of time doing something I love, program, and work on our notebook.  I think it's so cool that First encompasses a whole bunch of things that I really love. I can't wait to do more outreach and coding this year!! 
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/Isaac.jpg" class="testimonial-img" alt="">
                <h3>Isaac</h3>
                <h4>Team Member</h4>
                <p>
                 My name is Isaac Moyle. I am the chassis manager. I do my best to make sure that the base is stable. I enjoy hiking and biking although I don't do it for sport. I am apart of the CHS band program and take a Spanish course there as well. My favorite color is blue and my favorite animal is a parakeet.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/James.jpg" class="testimonial-img" alt="">
                <h3>James</h3>
                <h4>Team Member</h4>
                <p>
                  My name is James Moyle. I am in charge of the drivers. I make sure the drivers are getting driving practice in, while also am in charge of the field. I really love band and I am in the CHS Pep Band. I am taking a Spanish class, my family has turtles, and a parakeet.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/Allan_12-7th_2019.jpg" class="testimonial-img" alt="">
                <h3>Allan</h3>
                <h4>Team Member</h4>
                <p>
                  My name is Allan and this is my first year doing FTC but I did do 4 years of FLL, First Lego League. I like mechanical engineering and I have a lot of experience with coding. I am so excited for this year to work with my team.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/1/ad.jpg" class="testimonial-img" alt="">
                <h3>Aiden</h3>
                <h4>Team Member</h4>
                <p>
                  My name is Aiden, I was born in Cedar City, Ut and have lived here for all my life. I am the youngest of two siblings in my family. I like to do a ton of outdoorsy activities such as hike, bike, ski, rock climb, fish and of course I love to do F.T.C. activities. I love  to  be  a  part  of  the  Perfect  Paradox  team and have grown to be very fond of my teamates. 
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/1m.png" class="testimonial-img" alt="">
                <h3>Jean</h3>
                <h4>Team Member</h4>
                <p>
                  Jean is a sophomore at Launch High School, and has been involved with FTC for ___ years. She is the outreach manager for our team, and does a good job! Jean spends her free time drawing and on reddit. 
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/1m.png" class="testimonial-img" alt="">
                <h3>Marc</h3>
                <h4>Team Member</h4>
                <p>
                  Marc is a senior at Success Academy, and has been involved in FTC since 8th grade. It's one of his favorite things, he’s the team programer and task manager. Marc is a very hard worker, and were sad this is his last year.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/1m.png" class="testimonial-img" alt="">
                <h3>Shaeden</h3>
                <h4>Team Member</h4>
                <p>
                  Shaeden is a freshman at Launch High School. He enjoys Marvel movies and computer science. His main roles on the team are notebooking and strategy. Shaeden is new to our team, but was involved in FTC last 2 seasons in Illinois.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #testimonials -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">
        <?php
        function showw() {
        global $show;
            if ($show == true){
           echo '<header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header><div class="row">
          <div class="col-lg-12 col-xs-2">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-T">Team</li>
              <li data-filter=".filter-LY">Last Year</li>
              <li data-filter=".filter-TY">This Year</li>
              <li data-filter=".filter-P">Profiles</li>
              <li data-filter=".filter-Pr">Prototyping</li>
              <li data-filter=".filter-L">Launch</li>
              <li data-filter=".filter-C">CAD</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-2 col-md-4 portfolio-item filter-P">
            <div class="portfolio-wrap">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Briget</a></h4>
                <p>Briget 1</p>
                <div>
                  <a href="img/1m.png" onclick="addd()" data-lightbox="portfolio" data-title="Briget 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1m.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/1/hl.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Heather</a></h4>
                <p>Heather 1</p>
                <div>
                  <a href="img/1/hl.png" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Heather 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1/hl.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/IMG-0925.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Izzy</a></h4>
                <p>Izzy 1</p>
                <div>
                  <a href="img/IMG-0925.JPG" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Izzy 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/IMG-0925.JPG" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P">
            <div class="portfolio-wrap">
              <img src="img/Allan_12-7th_2019.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Allan</a></h4>
                <p>Allan 1</p>
                <div>
                  <a href="img/Allan_12-7th_2019.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Allan 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/Allan_12-7th_2019.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/James.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">James</a></h4>
                <p>James 1</p>
                <div>
                  <a href="img/James.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="James 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/James.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P">
            <div class="portfolio-wrap">
              <img src="img/Isaac.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Isaac</a></h4>
                <p>Isaac 1</p>
                <div>
                  <a href="img/Isaac.jpg" onclick="addd()" data-lightbox="portfolio" data-title="Isaac 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/Isaac.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Jean</a></h4>
                <p>Jean 1</p>
                <div>
                  <a href="img/1m.png" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Jean 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1m.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Marc</a></h4>
                <p>Marc 1</p>
                <div>
                  <a href="img/1m.png" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Marc 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1m.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
<div class="col-lg-2 col-md-4 portfolio-item filter-P" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Shaeden</a></h4>
                <p>Shaeden 1</p>
                <div>
                  <a href="img/1m.png" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Shaeden 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1m.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-P">
            <div class="portfolio-wrap">
              <img src="img/1/ad.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Aiden</a></h4>
                <p>Aiden 1</p>
                <div>
                  <a href="img/1/ad.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Aiden 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/1/ad.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-LY">
            <div class="portfolio-wrap">
              <img src="img/FTC_CompetionPic.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">FTC Competion</a></h4>
                <p>FTC Competion 1</p>
                <div>
                  <a href="img/FTC_CompetionPic.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="FTC Competion 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/FTC_CompetionPic.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
              </div>
            </div>
          </div>
         
         <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-LY">
            <div class="portfolio-wrap">
              <img src="img/43143.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">FTC Competion</a></h4>
                <p>FTC Competion 2</p>
                <div>
                  <a href="img/43143.jpeg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="FTC Competion 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/43143.jpeg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
              </div>
            </div>
          </div>
        <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-TY" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/56806.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#about">Yard Sale</a></h4>
                <p>Yard Sale 1</p>
                <div>
                  <a href="img/56806.jpeg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Yard Sale 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/56806.jpeg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/56804.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Yard Sale</a></h4>
                <p>Yard Sale 2</p>
                <div>
                  <a href="img/56804.jpeg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Yard Sale 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="img/56804.jpeg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">FLL Help</a></h4>
                <p>FLL Help</p>
                <div>
                  <a href="vid/1.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="FLL Help" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/1.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Small Robot</a></h4>
                <p>Small Robot</p>
                <div>
                  <a href="vid/2.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Small Robot" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/2.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-L filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Launch</a></h4>
                <p>Launch</p>
                <div>
                  <a href="vid/3.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Launch" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/3.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-L filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Launch</a></h4>
                <p>Launch 2</p>
                <div>
                  <a href="vid/4.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Launch 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/4.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping</p>
                <div>
                  <a href="vid/5.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/5.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 2</p>
                <div>
                  <a href="vid/6.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/6.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-Pr filter-T filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/111.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 3</p>
                <div>
                  <a target="_blank" href="vid/mid.mp4" onclick="removee()" class="link-preview" data-title="Prototyping 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/mid.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD</p>
                <div>
                  <a href="vid/7.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/7.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD 2</p>
                <div>
                  <a href="vid/8.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/8.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD 3</p>
                <div>
                  <a href="vid/9.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/9.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD 4</p>
                <div>
                  <a href="vid/10.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD 4" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/10.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-T filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD 5</p>
                <div>
                  <a href="vid/11.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD 5" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/11.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 4</p>
                <div>
                  <a href="vid/12.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping 4" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/12.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-C filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/13.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">CAD</a></h4>
                <p>CAD 6</p>
                <div>
                  <a href="vid/13.png" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="CAD 6" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/13.png" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-T filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/14.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Team</a></h4>
                <p>Team 1</p>
                <div>
                  <a href="vid/14.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Team 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/14.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 5</p>
                <div>
                  <a href="vid/15.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping 5" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/15.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/16.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 6</p>
                <div>
                  <a href="vid/16.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping 6" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/16.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-Pr filter-TY" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
            <img src="vid/17.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Prototyping</a></h4>
                <p>Prototyping 7</p>
                <div>
                  <a href="vid/17.jpg" onclick="addd()" class="link-preview" data-lightbox="portfolio" data-title="Prototyping 7" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="vid/17.jpg" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>';
        }
      else {
      echo '<header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>
        <div style="text-align: center; margin-left: auto;margin-top: 25px;margin-right: auto;" class="wow fadeInUp">
        <button class="goodbutton" onclick="document.getElementById(`popuplog`).style.display=`block`">Login</button></div>
      <div id="popuplog" style="z-index: 9999999999999999999;" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span style="border-radius: 10px;margin-right: 5px;margin-top:5px;" onclick="document.getElementById(`popuplog`).style.display=`none`" class="w3-button w3-display-topright">&times;</span>
        <h2>Enter Password:</h2>
        <p style="margin:0px!important;">&nbsp;</p>
		<div class="content">
		<form action="login_.php" method="POST">
        <div class="row">
        <div class="col-lg-6 col-md-4">
      <input type="text" name="user" placeholder="Username..." required>
    </div>
    <div class="col-lg-6 col-md-4">
      <input type="password" name="pass" placeholder="Password...">
    </div>
    <div class="col-lg-6 col-md-4">
      <input type="submit" style="margin: 5px;" value="Login">
    </div>
  </div>
 </form>
 <p style="margin:0px!important;">Note: If you are signing in as a judge or guest then do not enter a password.</p>
 <p style="margin:0px!important;">&nbsp;</p>
		</div>
      </div>
    </div>
  </div>
		';
      }
        }
        showw();
        ?>
      </div>
    </section><!-- #portfolio -->
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>This is are team</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-5 wow fadeInUp">
            <div class="member">
              <img src="img/IMG-0925.JPG" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Izzy</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/James.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>James</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/Isaac.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Isaac</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/Allan_12-7th_2019.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Allan</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-3 col-md-5 wow fadeInUp" >
            <div class="member">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Shaeden</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/1/ad.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aiden</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jean</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/1m.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Marc</h4>
                  <span>Team Member</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #team -->
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Our Sponsors</h3>
          <p>People We Work With</p>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
              <a href="https://launch.ironk12.org/">
              <img src="img/1/L.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
              <a href="https://4-h.org/">
              <img src="img/1/4h.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
 <a href="https://www.suu.edu/cos/tecs/">
              <img src="img/1/suut.jpg" class="img-fluid" alt="">      
       </a>   
          </div>
              </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
             <a href="https://www.firstinspires.org/robotics/ftc">
              <img src="img/1/ftc.png" class="img-fluid" alt="">
            </a>
          </div>
            </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
             <a href="https://www.firstinspires.org/robotics/ftc/game-and-season"><div id="cens" align="middle">
              <img src="img/1/ftcsuuug.png" class="img-fluid" alt="">
              <img src="img/1/ftcsuuq1.png" class="img-fluid" alt="">
               <img src="img/1/frcsuuq2.png" class="img-fluid" alt=""></div>
            </a>
          </div>
            </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
              <a href="https://www.suu.edu/">
              <div align="middle">
                <img src="img/1/suu.jpg" style="width: 150%;" class="img-fluid" alt=""></div>
              </a>
          </div>
          </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="client-logo">
              <a href="https://www.suu.edu/stem/robotics/ftc/">
              <div align="middle">
                <img src="img/1/ftcsuuu.jpg" style="width: 73%;" class="img-fluid" alt=""></div></a>
          </div>
            </div>
          <div class="col-lg-3 col-md-5 col-xs-6">
           <div class="client-logo">
           <a href="https://stem.utah.gov/">
               <div align="middle">
             <img src="img/utah-stem-action-center.png" class="img-fluid" alt=""></div></a>
          </div>
</div>
        </div>
      </div>
    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div1 class="container-fluid">
        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
        <div class="row wow fadeInUp"> 
        <ul class="nav">   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/1.css">
<div>
<div class="w3-container">
  <div id="a1"><li><a onclick="document.getElementById('id01').style.display='block'"><span style="cursor:pointer"><img src="img/lo.png"> Cedar City, UT 84720
                </span><br></a></li></div>
  <div style="z-index: 9999999999999999999;" id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header style="border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;" class="w3-container w3-purple"> 
        <span style="border-radius: 10px;margin-right: 5px;margin-top:5px;" onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Cedar City</h2>
      </header>
      <div class="w3-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101039.41048223928!2d-113.1720899697656!3d37.684887739281685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80b5617fe05ec2d1%3A0xef14cae28073d1e9!2sCedar%20City%2C%20UT!5e0!3m2!1sen!2sus!4v1599764285580!5m2!1sen!2sus" width="100%" height="430" frameborder="0" style="border:1;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</div>
</div>    
                <li><a href="mailto:perfectparadox8400%40gmail.com"><img src="img/em.png"> perfectparadox8400@gmail.com</a></li>
                <li><a href="tel:+1-435-704-7239">
                <img src="img/ph.png"> +1 (435)-704-7239</a></li>
                </ul>
            </div>
          </div1>
    </section><!-- #contact -->
  </main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-8 footer-info">
            <h3>Perfect Paradox's 8400</h3>
            <p>We are the Perfect Paradox. Originally our team name was the Macro Raptors, and we had 5 members, Adien, Isacc, Izzy, and James. A few years ago the five of us were on a FLL team called the MicroBots, and we gt to go to a international invitational in Arkansas. But this year we got 4 new team members, Allan, Jene, Shaeden, and Marc. So with new people on the team, we chose a new team name, the Perfect Paradox</p>
          </div>
          <div class="col-lg-2 col-md-8 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#about">About us</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-8 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Cedar City, UT 84720<br>
              United States <br>
              <strong>Phone:</strong> +1 (435)-704-4239<br>
              <strong>Email:</strong> perfectparadox8400@gmail.com<br>
            </p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-8 footer-newsletter">
            <h4>Get Updates</h4>
            <p>Get updates on games and competition details and more!</p>
            <a href="https://www.firstinspires.org/robotics/ftc"><img src="img/ftc.png"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Perfect Paradox's 8400</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="http://live.codechangers.com/aniles/">Allan Niles</a>
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- JavaScript Libraries -->
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
  <script src="js/hi.js"></script>
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