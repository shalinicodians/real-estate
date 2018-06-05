<!DOCTYPE html>
<html>
<head>
	<title></title>
  <!-- ==================
     external style
  ====================-->
  <link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css-master/animate.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
  <script src="jQuery/jquery-3.2.1.min.js"></script>
  <!-- ==================
     custome style
  ====================-->
  <script src="animate.css-master/js/wow.js"></script>
              <script>
              new WOW().init();
              </script>

  <style type="text/css">
    .loading{
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      /*display:none;*/
      border:1px solid #000;
      z-index:111999 !important;
      background: url(<?php echo('image/loading.gif'); ?>) 50% 50% no-repeat rgb(249,249,249);
    } 
  </style>
</head>
<body>
   <script type="text/javascript">
     $(function() {
     $(window).on("scroll",function(){
      //console.log("scroll");
      $("#works").addClass("animated bounceInDown");
   //    $("#text1").addClass("animated slideInLeft");
   //    $("#text2").addClass("animated slideInUp");
   //    $("#text3").addClass("animated slideInDown");
   //    $("#text4").addClass("animated slideInRight");
   //    if($(document).scrollTop() > 150){
      $("#work2").addClass("animated fadeInLeft");
   //    $("#cont1").addClass("animated fadeInLeft");
   //    $("#cont2").addClass("animated fadeInUp");
   //    $("#cont3").addClass("animated fadeInDown");
   //    $("#cont4").addClass("animated fadeInRight");
   //    // $("#cont").addClass("animated slideInRight");
   //  }
   //   });
   // });
    </script>

  <div id="test" class="loading" ></div> 
    <script type="text/javascript">
      $(function() {
        $(window).on("load", function() {
        $("#test").hide("slow");
        });
      });
    </script>
<div class="main_container " data-role="page" id="pageone">
  
  <div class="container-fluid " style="border: 0px;margin:0px!important;padding: 0px !important   ">
    <div class="row" style="">
      <div class="col-md-12 col-sm-12 col-xs-12" style="">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12" >
              <nav class="navbar navbar-expand-lg bg-light" id="nav" style="z-index: 32">
                <a href="" class="navbar-brand">
                <div class="page-header " style="margin-left: 0px" >
                <h1 style="color: black"><b>Real</b> Estate</h1>
                 <!-- ==================
                  triffort heading
                  =================-->
                  <div style="margin-left: 65px;margin-top: -20px">
                  <h1 class="alert-heading" style=";color: #23527c;font-weight: 400;">
                    <b>tri<span class="ff">ff</span>ort</b>
                  </h1>
                  <p style="position: absolute;margin-top: -20px;margin-left: 20px;color: black">
                    <b>technologies</b>
                  </p>
                  </div> <!-- triffort content -->
                </div></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main_col">
                  <!-- <img src="image/menu.png" style="height:30px ;float:right;margin-top: -50px"> -->
                  <span ><img src="image/menu.png" style="height:30px ;float:right;margin-top: -50px"></span>
                </button>
                <div id="main_col" class="navbar-collapse">
                  <ul class="navbar-nav" style="" >
                    <li class="nav-item">
                    <a class="nav-link" style="color: black;padding-left:30px " href="#"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="color: black;padding-left:30px" href="#"><b>About</b></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link " data-toggle="dropdown" id="drop1"  style="color: black;padding-left:30px" href="">
                        <b>Services</b>
                      </a>
                      <div id="col" class="dropdown-menu">
                        <a href="" class="dropdown-item">item 1</a>
                        <a href="" class="dropdown-item">item 1</a>
                        <a href="" class="dropdown-item">item 1</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link " data-toggle="dropdown" id="drop2" style="color: black;padding-left:30px" href=""><b>properties</b></a>
                      <div id="col2" class="dropdown-menu">
                        <a href="" class="dropdown-item">item 1</a>
                        <a href="" class="dropdown-item">item 1</a>
                        <a href="" class="dropdown-item">item 1</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color: black;padding-left:30px" href="#"><b>contacts</b></a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
           slider
    ==============================-->
    <div class="row" style="">
      <div class="col-sm-12 col-lg-12 col-12" style="padding: 0 !important;margin:0 !important;">
      <div id="slider" class="carousel slide" data-ride="carousel" style="">
        <div class="carousel-inner">
          <div class="carousel-item active" style="width: 100% !important">
            <img  class="d-block w-100" src="image/house1.jpg" style="object-fit: cover " / >
          </div>
          <div class="carousel-item " style="width: 100%">
            <img  class="d-block w-100" src="image/house2.jpg" style="object-fit: cover"/>
          </div>
          <div class="carousel-item " style="width: 100%">
            <img  class="d-block w-100" src="image/house1.jpg" style="object-fit: cover">
          </div>
          <div class="carousel-item " style="width: 100%">
            <img  class="d-block w-100" src="image/house4.jpg" style="object-fit: cover"/>
          </div>
        </div>
        <a class="carousel-control-prev" href="#slider" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">next</span>
        </a>
      </div>
    </div>
    </div>


    <div class="row-fluid">
      <div class="container" style="">
        <div class="row navv" style="">
          <div class="col-sm-4 col-md-2 col-6 bg-light" style="">
            <ul class="nav nav2" style="margin-top: 6px">
              <li style="list-style-type:none ">
                <figure class="thumbnail featured-thumbnail">
                  <a href="">
                   <img src="image/doc.png" class="rotate-1" style="height: 60px">
                  </a>
                </figure>
                <figcaption class="fig1" style="">document</figcaption>
              </li>
            </ul>
          </div> 
          <div class="col-sm-4 col-md-2 col-6 bg-light" style="">
            <ul class="nav nav2" style="margin-top: 6px">
              <li style="list-style-type:none ">
                <figure class="thumbnail featured-thumbnail">
                  <a href="">
                   <img src="image/consultant.png" class="rotate-2" style="height: 60px">
                  </a>
                </figure>
                <figcaption class="fig1" style="">Consultant</figcaption>
              </li>
            </ul>
          </div>   
          <div class="col-sm-4 col-md-2 col-6 bg-light" style="">
            <ul class="nav nav2" style="margin-top: 6px">
              <li style="list-style-type:none ">
                <figure class="thumbnail featured-thumbnail">
                  <a href="">
                   <img src="image/file.png" class="rotate-3" style="height: 60px">
                  </a>
                </figure>
                <figcaption class="fig1" style="">Archieve</figcaption>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-2 col-6 bg-light" style="">
            <ul class="nav nav2" style="margin-top: 6px">
              <li style="list-style-type:none ">
                <figure class="thumbnail featured-thumbnail">
                  <a href="">
                   <img src="image/gal.png" class="rotate-4" style="height: 60px">
                  </a>
                </figure>
                <figcaption class="fig1" style="">Gallery</figcaption>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-2 col-6 bg-light" style="">
            <ul class="nav nav2" style="margin-top: 6px">
              <li style="list-style-type:none ">
                <figure class="thumbnail featured-thumbnail">
                  <a href="">
                   <img src="image/certi.png" class="rotate-1" style="height: 60px">
                  </a>
                </figure>
                <figcaption class="fig1" style="">Certificate</figcaption>
              </li>
            </ul>
          </div>     
        </div>
      </div>
    </div>
<!-- =======================
       How It works
  ======================= -->
    <div class="row-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12 col-12">
          <div class="animated bounceInDown text-center" id="works" data-duration="5s"  style="margin:20px 0 10px 0; font-weight: 200 !important;font-size: 45px;color: #111111;visibility: visible;"> 
            How it Works
          </div>
            <hr style="border: 2px solid #6AB56E; width: 50px; margin-bottom: 40px;">
          </div>
        </div>
      </div>
    </div>
    <!--================
      blocks
    ====================  -->
<div class="row-fluid" style="">
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6 wow slideInLeft" id="text1" style="cursor: pointer;visibility: visible">
              <span class="line-1" style=""></span>
                 <a href="" style="font-size: 45px; color:green;font-weight: 200 !important;text-decoration: none">1</a>
                <span class="line-2"></span>
              <h4>Maintainance</h4>
            <p>There is no rule that related segments of words have to be spelled </p>
        </div>
        <div class="col-lg-3 col-6 wow slideInUp" id="text2" style="cursor: pointer;visibility: visible">
          <span class="line-1" style=""></span>
                 <a href="" style="font-size: 45px;; color:green;font-weight: 200 !important;text-decoration: none">2</a>
               <span class="line-2"></span>
            <h4>Rooms</h4>
        <p>you can find the suggested words which we believe are the correct</p>
    </div>
        <div class="col-lg-3 col-6 wow slideInDown" id="text3" style="cursor: pointer;visibility: visible">
           <span class="line-1" style=""></span>
                   <a href="" style="font-size: 45px;; color:green;font-weight: 200 !important;text-decoration: none">3</a>
                  <span class="line-2"></span>
              <h4>Decoration</h4>
          <p> preserving a condition or situation or the state of being preserve</p>
        </div>
        <div class="col-lg-3 col-6 wow slideInRight" id="text4" style="cursor: pointer;visibility: visible">
              <span class="line-1" style=""></span>
                  <a href="" style="font-size: 45px;; color:green;font-weight: 200 !important;text-decoration: none">4</a>
                <span class="line-2"></span>
            <h4 style="margin-left:30px ">Interior</h4>
          <p>preserved, the provision of financial support for a perso.</p>
        </div>
    </div>
   </div>
 </div>
 <!-- ======================
      Latest Properties
      ========================== -->
   <div class="row-fluid"  style=" ">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12 col-12">
          <div class=" text-center" id="work2" data-duration="5s" style="margin:20px 0 10px 0; font-weight: 200 !important;font-size: 45px;color: #111111;"> 
            Latest Properties
          </div>
            <hr style="border: 2px solid #6AB56E; width: 50px; margin-bottom: 40px;">
          </div>
        </div>
      </div>
    </div> 
  </div> <!-- end of main container -->
    <!-- ==============
        Thumbnail
    ======================== -->
    <div class="container-fluid" style="border: 1px solid red;border:0px;margin:0px!important;padding: 0px !important">
      <div class="row thumbs" style="">
        <div class="col-lg-3 col-12">
      <div class="wow fadeInLeft"  style="border: 1px solid lightgrey">
           <div class="card" style="">
              <img class="card-img-top img-thumbnail" src="image/prop1.jpg" style="">
               <div class="card-body">
                 <h4 class="card-title">Interor Room</h4>
                 <p class="card-body">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet,gfdgfdgfdgfd vdfgfgg ...</p>
               </div>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-12">
      <div class=" wow fadeInDown" id="cont2" style="border: 1px solid lightgrey">
           <div class="card" style="">
              <img class="card-img-top img-thumbnail" src="image/prop2.jpg" style="">
               <div class="card-body">
                 <h4 class="card-title">Interor Room</h4>
                 <p class="card-body">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet,gfdgfdgfdgfd vdfgfgg ...</p>
               </div>
            </div>
          </div>
        
      </div>
      <div class="col-lg-3 col-12">
      <div class="wow fadeInUp" id="cont3" style="border: 1px solid lightgrey">
           <div class="card" style="">
              <img class="card-img-top img-thumbnail" src="image/prop3.jpg" style="">
               <div class="card-body">
                 <h4 class="card-title">Interor Room</h4>
                 <p class="card-body">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet,gfdgfdgfdgfd vdfgfgg ...</p>
               </div>
            </div>
          </div>
        
      </div>
      <div class="col-lg-3 col-12">
      <div class="wow fadeInRight" id="cont4" style="border: 1px solid lightgrey">
           <div class="card" style="">
              <img class="card-img-top img-thumbnail" src="image/prop4.jpg" style="">
               <div class="card-body">
                 <h4 class="card-title">Interor Room</h4>
                 <p class="card-body">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet,gfdgfdgfdgfd vdfgfgg ...</p>
               </div>
            </div>
          </div>
        </div>
        </div>
    

    <!--====================
     Footer
     =============================  -->

<div class="row" style="margin-top: 160px"> 
<div class="col-lg-12 col-12 " style="height: 150px;background-color: black;">
 
    <center><h1 style="color:white;padding-top: 30px;padding-bottom: 20px"><b>Real</b> Estate</h1></center>
     
</div>
  
</div>
<!-- </div> -->
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
