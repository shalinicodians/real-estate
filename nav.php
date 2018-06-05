<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css-master/animate.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    
  <script src="jQuery/jquery-3.2.1.min.js"></script>
 
<!-- <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script> -->

<!-- ============================================styling=============================================== -->

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
   <div id="test" class="loading" ></div> 
<script type="text/javascript">
$(function() {
    $(window).on("load", function() {
         
          $("#test").hide("slow");

       
    });
});
    // $("#loading").show();
    // 
</script>


<div class="row-fluid">
    <div class="col-sm-12">
    

               
          
                <div class="container">
                <div class="row">
           <div class="col-sm-12 col-md-12 col-xs-12" >
           <nav class="navbar navbar-expand-lg bg-light" id="nav" style="z-index: 32">

            <a href="" class="navbar-brand">
             <div class="page-header " >
            <h1 style="color: black"><b>Real</b> Estate</h1>
            <!-- ========================================triffort heading========================= -->
            <div style="margin-left: 65px;margin-top: -20px">
               <h1 class="alert-heading" style=";color: #23527c;font-weight: 400;"><b>tri<span class="ff">ff</span>ort</b></h1>
                <p style="position: absolute;margin-top: -20px;margin-left: 20px;color: black"><b>technologies</b></p>
           </div> <!-- triffort content -->
           
           </div></a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main_col"><img src="image/menu.png" style="height:30px ;float: right;margin-top: -50px"></button>
            <div id="main_col" class="navbar-collapse">
           <ul class="navbar-nav" >
               <li class="nav-item">
                   <a class="nav-link" style="color: black" href="#"><b>Home</b></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" style="color: black" href="#"><b>About</b></a>
               </li>
               <li class="nav-item dropdown">
                   <a class="nav-link " data-toggle="dropdown" id="drop1"  style="color: black" href=""><b>Services</b></a>
                   <div id="col" class="dropdown-menu">
                       <a href="" class="dropdown-item">item 1</a>
                       <a href="" class="dropdown-item">item 1</a>
                       <a href="" class="dropdown-item">item 1</a>
                   </div>

               </li>
               <li class="nav-item dropdown">
                   <a class="nav-link " data-toggle="dropdown" id="drop2" style="color: black" href=""><b>properties</b></a>
                   <div id="col2" class="dropdown-menu">
                       <a href="" class="dropdown-item">item 1</a>
                       <a href="" class="dropdown-item">item 1</a>
                       <a href="" class="dropdown-item">item 1</a>
                   </div>

               </li>
               <li class="nav-item">
                   <a class="nav-link" style="color: black" href="#"><b>contacts</b></a>
               </li>
     

           </ul>
       </div>
   </nav>
</div>
</div>
</div>
<!-- ====================================slider======================================= -->
<div class="row">
    <div class="col-md-12">
    <div id="slider" class="carousel slide" data-ride="carousel" style="">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  class="d-block w-100" src="image/house1.jpg"/>
            </div>
            <div class="carousel-item ">
                <img  class="d-block w-100" src="image/house2.jpg"/>
            </div>
            <div class="carousel-item "/>
                <img  class="d-block w-100" src="image/house3.jpg">
            </div>
            <div class="carousel-item ">
                <img  class="d-block w-100" src="image/house4.jpg"/>
            </div>

        </div>
        <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-prev-item"></span>
        <span class="sr-only">previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-next-item"></span>
        <span class="sr-only">next</span>
        </a>
    </div>
</div>
</div>
<!-- =====================================navbar 2======================================== -->
 <div class="container cont1" id=""  style="margin-left: 200px;">
                <div class="row" >
           <!-- <div class="col-sm-12 col-md-12 col-xs-12"  > -->
           <!-- <nav class="navbar navbar-expand-lg bg-info" id="nav" > -->
           <div class="col-sm-4 col-md-2 col-xs-6 bg-light" style="">
           <ul class="nav nav2" style="">
        
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
          <div class="col-sm-4 col-md-2 col-xs-6 bg-light" >
           <ul class="nav nav2" style="">
        
              <li style="list-style-type:none ">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/consultant.png" class="rotate-2" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig2" style="">consultants</figcaption>
              </li>
          </ul>
          </div>
           <div class="col-sm-4 col-md-2 col-xs-6 bg-light" >
          <ul class="nav nav2" >
         <li style="list-style-type:none ">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/file.png" class="rotate-3" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig3" style="">Archieve</figcaption>
              </li>
             
          </ul>
          </div>
     
 <div class="col-sm-4 col-md-2 col-xs-6 bg-light" >
          <ul class="nav nav2" >
        <li style="list-style-type:none ">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/gal.png" class="rotate-4" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig4" style="">Gallery</figcaption>
              </li>
             
          </ul>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6 bg-light" >
          <ul class="nav nav2" >
       <li style="list-style-type: none">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/schedule.png" class="rotate-5" style="height: 60px">
                     </a>

                 </figure>
                 <figcaption class="fig5" style="">Schedule</figcaption>
              </li>
             
          </ul>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6 bg-light" >
          <ul class="nav nav2" >
       <li style="list-style-type: none">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/certi.png" class="rotate-6" style="height: 60px">
                     </a>

                 </figure>
                 <figcaption class="fig5" style="">Certificate</figcaption>
              </li>
             
          </ul>
          </div>


              <!-- <li class=" col-md-2 col-xs-6 r-icon">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/consultant.png" class="rotate-2" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig2" style="">consultants</figcaption>
              </li>
           
              <li class=" col-md-2 col-xs-6 r-icon">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/file.png" class="rotate-3" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig3" style="">Archieve</figcaption>
              </li>
              <li class=" col-md-2 col-xs-6 r-icon">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/gal.png" class="rotate-4" style="height: 60px">
                     </a>
                 </figure>
                 <figcaption class="fig4" style="">Gallery</figcaption>
              </li>

              <li class=" col-md-2 col-xs-6 r-icon">
                 <figure class="thumbnail featured-thumbnail">
                     <a href="">
                         <img src="image/schedule.png" class="rotate-5" style="height: 60px">
                     </a>

                 </figure>
                 <figcaption class="fig5" style="">Schedule</figcaption>
              </li>
              </div>




           </ul> -->
       </div>
       <!-- </div> -->
   <!-- </nav> -->
</div>

<div class="container-fluid">
    
  <div class="row"> 
    <div class="col-sm-12 col-lg-12">

<div class=" display-4 animated bounceInDown" data-duration="5s" style=""> How it Works</div>
 <span class="green"></span>
 </div>
 </div>
 <div class="row">
     
 </div> 

</div>
</div>

</div>







          





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

           
</body>
</html>