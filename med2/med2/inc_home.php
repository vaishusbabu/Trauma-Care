<?php
include("connect.php");
ob_start();
session_start();
$sid=$_SESSION['uid'];
$ssel=  mysql_query("select * from increg where uid='$sid'");
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
    
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
   $ins=  mysql_query("insert into add_inc values('','$t1','$t2','$sid','1')");
 
   
    if($ins>0)
    {
       
       header("location:inc_home.php");
}
}                         
                            


?>
<?php
                            if(isset($_GET['del']))
{
                                $dete=$_GET['del'];
    $del1=mysql_query("delete from add_inc where id='$dete'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:inc_home.php");
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
                                    <a href="staffhome.php" style="text-decoration: none"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[1] ?>&nbsp &nbsp<img src="ins_pic//<?php echo $sr[13] ?> "style="width: 70px;height: 70px"></span></a>
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
                                    
				</div>
				<div class="grid span_2_of_3">
					
                                    <form method="post">
                                        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                                <tr>
                                                    <td colspan="2"><center><b>Add Package</b></center></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>Name</td>
                                                    <td><input type="text" name="t1" id="la" class="form-control" required="required" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td><textarea class="form-control" name="t2" cols="5" rows="5"></textarea></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2"><center><input type="submit" name="sub" value="Register Now" class="btn btn-success" /></center></td>
                                                </tr>
                                            </table>
                                        
                                    </form>
			   </div>
		   </div>
                                        <table class="table table-bordered table-responsive table-condensed table-hover table-striped">
                                                <tr>
                                                   
                                                    <th style="color: grey;font-family:  inherit">
                                                        Title
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        Description
                                                    </th>
                                                    
                                                    <th colspan="3" align="center">
                                                    
                                                        More
                                                    </th>
                                                   
                                                </tr>
                                                <?php
                                                $sl=mysql_query("select * from add_inc");
                                                if($sl>0)
                                                {
                                                    while ($r=mysql_fetch_row($sl))
                                                    {
                                                    ?>    
                                               
                                                        <tr>
                                                            <th>
                                                                <?php echo $r[1] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[2] ?>
                                                            </th>
                                                            
                                                            <th>
                                                                
                                                          
                                                                <a href="inc_home.php?del=<?php echo $r[0] ?>"><img src="sy/u.jpg" width="20px" height="20px" title="DEny"></a>
                                                            </th>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                    
                                                ?>
                                                
                                            </table>
		   
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

