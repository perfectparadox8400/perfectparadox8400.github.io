<?php
session_start();
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
<html id="hi">
    <head>
        <script>
    if(window==window.top) {
    document.location.href = "/";
}
     </script>
        <title>Team Dashboard | Perfect Paradox 8400</title>
        <link href="/img/lll.png" rel="icon">
  <link href="/img/lll.png" rel="apple-touch-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<style>
body{
    margin:0;
   padding:30px;
   background-color:#f1f1f1;
}
.card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 4;
  }
  @include media-breakpoint-only(xl) {
    column-count: 5;
  }
}
.card{
    margin-bottom: 30px;
}
.hide{
    display: none !important;
}
</style>
        </head>
        <div class="row">
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card J G T">
        <img class="card-img-top" src="account/image.png">
      <div class="card-body">
        <h5 class="card-title">Edit Accounts</h5>
        <p class="card-text">Edit Accounts and passwords etc.</p>
        <button onclick="itt('/dash/account/','Edit Accounts');" class="btn btn-primary">Edit Accounts</button>
      </div>
    </div>
    <div class="card J G">
        <img class="card-img-top" src="tobuy/image.png">
      <div class="card-body">
        <h5 class="card-title">Things To Buy</h5>
        <p class="card-text">This is a wish list!</p>
        <button onclick="itt('/dash/tobuy/','Things To Buy');" class="btn btn-primary">Things To Buy</button>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card J G">
        <img class="card-img-top" src="gmail.jpg">
      <div class="card-body">
        <h5 class="card-title">Gmail</h5>
        <p class="card-text">Google Gmail: <a target="_blank" href="mailto:perfectparadox8400@gmail.com">perfectparadox8400@gmail.com</a><br>Make sure that you have logged in or it will not work.</p>
        <a target="_blank" href="https://mail.google.com/mail/u/perfectparadox8400@gmail.com/" class="btn btn-primary">Gmail</a>
      </div>
    </div>
  </div>
 <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card J G">
        <img class="card-img-top" src="drive.png">
      <div class="card-body">
        <h5 class="card-title">Google Drive</h5>
        <p class="card-text">Google Drive: <a target="_blank" href="mailto:perfectparadox8400@gmail.com">perfectparadox8400@gmail.com</a><br>Make sure that you have logged in or it will not work.</p>
        <a target="_blank" href="https://drive.google.com/drive/u/perfectparadox8400@gmail.com/my-drive" class="btn btn-primary">Google Drive</a>
      </div>
    </div>
  </div>
</div>
</div>
<script>
function itt(link,tiii){
        window.parent.postMessage({
      link: link,
      title: tiii
    }, '*');
}
$(document).ready(function(){
    var type = "<?php echo $_SESSION['type'];?>";
if(type == "A"){
    if($('.card').hasClass('A')){
      $('.A').remove();
    }
}else if(type == "M"){
   if($('.card').hasClass('M')){
      $('.M').remove();
    }
}else if(type == "T"){
    if($('.card').hasClass('T')){
      $('.T').remove();
    }
}else if(type == "J"){
    if($('.card').hasClass('J')){
      $('.J').remove();
    }
    alert("I have not added portfolio link .etc");
}
    
  });
</script>
<script src="/js/hi.js"></script>
    </html>