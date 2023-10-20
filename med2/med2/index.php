<?php
include("connect.php");
if(isset($_POST['sub']))
{
            $la=substr($_POST['la'],0,7);
    $lo=substr($_POST['lo'],0,7);
    header("location:map1.php?la=$la&lo=$lo");
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Trauma Care | Home</title>
                <link href="images/logo_1.png" rel="shortcut icon">
                <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="HandheldFriendly" content="true">
                <script>
                    addEventListener("load", function () {
                        setTimeout(hideURLbar, 0);
                    }, false);

                    function hideURLbar() {
                         window.scrollTo(0, 1);
                    }
                </script>
                
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap1"), mapOptions);
            google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #3391E7;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
        </head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<!--<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div> -->
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="topnav" id="myTopnav">
                                    <a href="index.php" style="text-decoration: none">Home</a>
                                    <a href="hosreg.php" style="text-decoration: none">Hospital registration</a>
                                    <a href="emerg1.php" style="text-decoration: none">Emergency</a>
                                    <a href="searchhos.php" style="text-decoration: none">Search Hospital</a>
                                    <a href="viewgallery.php" style="text-decoration: none">Gallery</a>
                                    <a href="login.php" style="text-decoration: none">Login</a>
                                    <a href="feedback.php" style=" text-decoration: none">Feedback</a>
                                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                      <i class="fa fa-bars"></i>
                                    </a>
                                  </div>
				<script>
                                function myFunction() {
                                  var x = document.getElementById("myTopnav");
                                  if (x.className === "topnav") {
                                    x.className += " responsive";
                                  } else {
                                    x.className = "topnav";
                                  }
                                }
                                </script>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Insurance</h3>
						  <p>Need More info?</p>
                                                  <div class="button"><span><a href="search_in.php">Search</a></span></div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
                                            <a href="app/GetLattittude.apk"><img src="images/2000px-Blue_ambulance_icon.svg.png"style="height: 115px"></a>
					</div>
					<div class="text list_1_of_2">
                                            <h3>Ambulance</h3><span class="fa fa-android"></span>
                                                  <a href="am_reg.php" ><p>Register Ambulance?</p></a>
                                                  <div class="button"><span><a href="search_am.php">Search Ambulance</a></span></div>
                                                  
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
                                            <img src="images/body-34-512.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Donate Blood</h3>
						  <p>Need More info?</p>
                                                  <div class="button"><span><a href="blood.php">View More</a></span></div>
				    </div>
				</div>				
			</div>
		    </div>
		   </div>
                    <br> <br>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist"> 
					<h3>Search Hospitals</h3>
				
					<form method="post">
                                    <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                         <tr>
                                            <td >Latitude</td>
                                            <td><input type="text" name="la" id="la" class="form-control " required="required" /></td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td><input type="text" name="lo" id="lo" class="form-control" required="required" /></td>
                                        </tr>
                                        

                                        <tr>
                                            <td colspan="2"><center><input type="submit" name="sub" value="Find Now" class="btn btn-sm btn-success" /></center></td>
                                        </tr>
                                    </table>
                                    </form>
				</div>
                       
                       <div class="col_1_of_3 span_1_of_6 second" style="float: right;padding-right: 0%;">
                          
                 
                           
                           
                           
                           
                           
                           <div id="dvMap1" style=" width:700px; height: 400px;"></div>
                          <!-- <div id="map3" style="width: 600px; height: 400px"></div> -->
                           
                       </div>
				
			</div>
		   </div>
		   </div>
		   <div class="clear"> </div>
<!--		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>-->
<div class="footer">
    <div class="wrap">
    <div class="footer-left">
        
            
        </div>
    </div>

                        <div class="footer-centre">
                            <p style="padding-left: 45%">Copyright © 2019 <a href="http://tarumacare.in/">Trauma Care</a></p>
		   	</div>
<div class="clear"> </div>
</div>
		<!--end-wrap-->
	</body>
</html>

