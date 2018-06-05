<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <script src="jQuery/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ============================================styling=============================================== -->
<style type="text/css">
	input[type="search"]{
		background-image:url("image/search.png");
		background-size: 30px 30px;
		background-repeat: no-repeat;
		background-position: right;

	}
</style>

</head>
<body>
	
	<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-7 col-xs-7">

<nav class="navbar navbar-expand-sm bg-info navbar-light fixed-top">
	<!-- ==============================flipkart & icon====================== -->
	<a href="" class="navbar-brand"><em><h3 style="color: white">Mykart&nbsp;&nbsp;<img src="image/m.png" style="height: 40px;" ></h3></em></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_col">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- =======================search button================================================ -->
	<form class="form-inline col-md-9 col-sm-9 col-xs-9" style="padding:0px;">
	
		<input type="search" placeholder="search for products,brands and more"  class="form-control col-sm-4" placeholder="search" style="float: left" />
	

		<!-- <button type="button"  class="btn btn-warning col-sm-0" style="float:left;"><span class=""><img src="image/search.png" style="height:20px"></span></button> -->
	</form>




<!-- ==================================navbar================================================ -->
	<div id="navbar_col" class="navbar-collapse" >
<ul class="navbar-nav " style="">


<li class="nav-item">
<a class="nav-link" style="color: white" href="#"></a>
</li>
<li class="nav-item">
<a class="nav-link" style="color: white" href="#">Signup</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: white" data-toggle="dropdown" data-target="#drop" href="#">More</a>
<div id="drop" class="dropdown-menu">
<a class="dropdown-item" href="#">link 1</a>
<a class="dropdown-item" href="#">link 2</a>
<a class="dropdown-item" href="#">link 3</a>

</div>
</li>
<li class="nav-item">
<a class="nav-link" style="color: white" href="#">Login</a>
</li>
</ul>
</div>
</nav>

</div>
</div>
</div>

<!-- ===================================================navs==================================== -->
					<div class="container-fluid" style="margin-top: 120px; clear: both">
					<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12">
						<nav class="navbar navbar-expand-sm bg-light navbar-default">

					

						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#drop_collapse"><span class="navbar-toggler-icon"><img src="image/menu.png" style="height: 40px;float: left"></span></button>

						<div id="drop_collapse" class="collapse navbar-collapse">
                          <ul class="navbar-nav"  style="float: right">
					<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding-right: 100px;color: black" >Electronics</a>
					<div id="drop_el" class="dropdown-menu">
						<a href="" class="dropdown-item">link 1</a>
						<a href="" class="dropdown-item">link2</a>
						<a href="" class="dropdown-item">link 3</a>
						<a href="" class="dropdown-item">link 4</a>
						<a href="" class="dropdown-item">link 5</a>
					</div>
					</li>

					<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding-right: 100px;color: black">Tv/appliances</a>
					<div id="drop_el" class="dropdown-menu">
						<a href="" class="dropdown-item">link 1</a>
						<a href="" class="dropdown-item">link2</a>
						<a href="" class="dropdown-item">link 3</a>
						<a href="" class="dropdown-item">link 4</a>
						<a href="" class="dropdown-item">link 5</a>
					</div>
					</li>

					<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding-right: 70px;color: black">Mens Wear</a>
					<div id="drop_el" class="dropdown-menu">
						<a href="" class="dropdown-item">link 1</a>
						<a href="" class="dropdown-item">link2</a>
						<a href="" class="dropdown-item">link 3</a>
						<a href="" class="dropdown-item">link 4</a>
						<a href="" class="dropdown-item">link 5</a>
					</div>
					</li>

					<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding-right: 100px;color: black">Womens wear</a>
					<div id="drop_el" class="dropdown-menu">
						<a href="" class="dropdown-item">link 1</a>
						<a href="" class="dropdown-item">link2</a>
						<a href="" class="dropdown-item">link 3</a>
						<a href="" class="dropdown-item">link 4</a>
						<a href="" class="dropdown-item">link 5</a>
					</div>
					</li>

					<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding-right: 100px;color: black">Baby and Kids</a>
					<div id="drop_el" class="dropdown-menu">
						<a href="" class="dropdown-item">link 1</a>
						<a href="" class="dropdown-item">link 2</a>
						<a href="" class="dropdown-item">link 3</a>
						<a href="" class="dropdown-item">link 4</a>
						<a href="" class="dropdown-item">link 5</a>
					</div>
				</li>
			</ul>
					</div>

					
					
				</nav>
				</div>         <!-- coloumn -->
				</div>        <!-- row -->
                      </div>  <!-- container -->

                      <!--=================================slider=================================  -->
					<div id="carouslcontrol" class="carousel slide" data-ride="carousel" style="margin-top: 10px">
					<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block w-100" src="image/iphone.jpg" style="height: 400px" alt="first-slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="image/samsung.jpg" style="height: 400px" alt="third-slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="image/samsung1.jpg" style="height: 400px" alt="second-slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="image/food.jpg" style="height: 400px" alt="fourth-slide">
					</div>
					</div>
					<a class="carousel-control-prev" href="#carouslcontrol" data-slide="prev" >
					<span class="carousel-prev-item"></span>
					<span class="sr-only">previous</span>
					</a>
					<a class="carousel-control-next" href="#carouslcontrol" data-slide="next" >
					<span class="carousel-next-item"></span>
					<span class="sr-only">next</span>
					</a>
					</div>
					<!-- ========================Thumbnail========================= -->
                   <div class="container" style="margin-top: 30px">
                   	<div class="row">
                   	<div class="col-md-4">
                   	<div class="thumbnail">
                   		<a href="#" >
                   			<img src="image/food.jpg" alt="food" style="width:70%"/>
                   		</a>
                   		<div class="caption">
            <p>food</p>
          </div>
                   	</div>
                   </div>
                    	<div class="col-md-4">
                   	<div class="thumbnail">
                   		<a href="#" >
                   			<img src="image/samsung1.jpg" alt="food" style="width:70%"/></a>
                   		<div class="caption">
            <p>samsung</p>
          </div>
                   	</div>
                   </div>
                   </div>
                    </div>
                    
					</div>   <!-- close of main-content -->


					<!-- =============================sidebar====================== -->
					<!--                         <div class="row " >
                            <div class="col-md-3 col-xs-1 p-l-0 p-r-0  collapse " id="sidebar">
                            <div class="list-group panel ">
                                <a href="#menu1" class="list-group-item collapsed bg-dark" style="color: white" data-toggle="collapse" data-parent="#sidebar">item1</a>
                                <div class="collapse" id="menu1">
                                <a href="" class="list-group-item bg-dark" style="color: white" data-parent="#menu1">subitem 1</a>
                                <a href="" class="list-group-item bg-dark" style="color: white" data-parent="#menu1">subitem 2</a>
                                <a href="" class="list-group-item bg-dark" style="color: white" data-parent="#menu1">subitem 3</a>
                                <a href="" class="list-group-item bg-dark" style="color: white" data-parent="#menu1">subitem 4</a>
                            </div>
                            <a href="#" class="list-group-item collapsed bg-dark" style="color: white" data-parent="#sidebar">item2</a>
                            <a href="#" class="list-group-item collapsed bg-dark" style="color: white" data-parent="#sidebar">item2</a>
                            <a href="#" class="list-group-item collapsed bg-dark" style="color: white" data-parent="#sidebar">item2</a>
                            <a href="#" class="list-group-item collapsed bg-dark" style="color: white" data-parent="#sidebar">item2</a>
                            <a href="#" class="list-group-item collapsed bg-dark" style="color: white" data-parent="#sidebar">item2</a>
                        </div>
                    </div> -->
                         
                             
           <!--  <a href="#sidebar" data-toggle="collapse"><img src="image/menu.png" style="height: 20px"></a>
 -->            




		


</body>
</html>