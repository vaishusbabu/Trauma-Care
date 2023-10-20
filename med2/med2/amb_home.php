<?php
include("connect.php");
ob_start();
session_start();
$sid=$_SESSION['uid'];
$ssel=  mysql_query("select * from amb where uid='$sid'");
if(mysql_num_rows($ssel)>0)
{
    $sr=mysql_fetch_row($ssel);
}

if(isset($_GET['t']))
{
$emer=$_GET['t'];
$ein=mysql_query("update image set status='1' where id='$emer'");
//echo mysql_error();
if($ein>0)
{
    header("location:staffhome.php");
}
 else {
     header("location:staffhome.php");
}
}

if(isset($_GET['p']))
{
$emerg=$_GET['p'];
$eins=mysql_query("update image set status='2' where id='$emerg'");

if($eins>0)
{
    header("location:staffhome.php");
}
 else {
    header("location:staffhome.php");
}
}
?>
<?php
if(isset($_POST['sub']))
{
    $sid=$_SESSION['uid'];
    $la=$_POST['la'];
    $lo=$_POST['lo'];
    $upd1=mysql_query("update amb set la='$la',lo='$lo'where uid='$sid'");
    
   
    if($upd1>0)
    {
       
       header("location:amb_home.php");
}
}                         
                            


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
            <title>Trauma Care | Ambulance Registration</title>
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

         
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
        <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                                    <a href="staffhome.php" style="text-decoration: none"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[1] ?>&nbsp &nbsp<img src="img1/<?php echo $sr[7] ?> "style="width: 70px;height: 70px"></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="topnav">
					<ul>
                                           
                                                <li class=""><a href="logout.php"style="text-decoration: none">Sign out</a></li>
						
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
			<div class="blog">
		    		<div class="blog-grid">
		    			<h4></h4>
		    			<div class="blog-grid-header">
		    				
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
<!--					<img src="images/box-img1.jpg">-->
                                    <div id="dvMap" style="width: 100%; height: 500px"></div>
				</div>
				<div class="grid span_2_of_3">
					
                                    <form method="post">
                                        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                                <tr>
                                                    <td colspan="2"><center><b>Update Current Location</b></center></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>Latitude</td>
                                                    <td><input type="text" name="la" id="la" class="form-control" required="required" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td><input type="text" name="lo" id="lo" class="form-control" required="required" /></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2"><center><input type="submit" name="sub" value="Register Now" class="btn btn-success" /></center></td>
                                                </tr>
                                            </table>
                                        
                                    </form>
			   </div>
		   </div>
		   
		    		</div>
		    		
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

