<?php
include("connect.php");
session_start();
$tp=$_SESSION['tp'];
$sel=  mysql_query("select * from p_reg where uid='$tp'");
$r=  mysql_fetch_row($sel);
if(isset($_POST['add']))
{
    
    $la=$_POST['lt'];
    $lo=$_POST['lon'];
   
    
   $logn=mysql_query("update p_reg set la='$la',lo='$lo',st='1' where uid='$tp'" );
    if($logn>0)
    {
        header("location:tp2.php");
    }
 else {
         
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
		<title>medicare Website Template | contact :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

 
        
        </head>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
  <script type="text/javascript">
       
        function initMap() {
        var uluru = {lat: <?php echo $r['2']?>, lng: <?php echo $r['3']?>};
        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 12,
          center: uluru
          
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        
      }
    
   
  </script>
  <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng( <?php echo $r['2']?>,  <?php echo $r['3']?>),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
                
            };
            
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
           
        }
    </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
  <script type="text/javascript">
       
   
   function dynamic_loc(a,b,i)
        {
            var mapOptions = {
                center: new google.maps.LatLng(a, b),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"+i), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                //document.getElementById("la").value=e.latLng.lat();
                //document.getElementById("lo").value=e.latLng.lng();
            });
            var marker = new google.maps.Marker({
          position: mapOptions,
          map: map
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
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="tp2.php"style="text-decoration: none">Home</a></li>
                                            <li><a href="help.php"style="text-decoration: none">Emergency</a></li>
                                           <li><a href="logout.php"style="text-decoration: none">Sign out</a></li>
					</ul>			
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
							
				<div class="col-lg-12">
                                    
                                    
                                    <?php

$la=$r[2];
$lo=$r[3];

    $sel1=mysql_query("SELECT distinct acc_id id,lattitude,longitude,dt,image, SQRT( POW(69.1 * (lattitude - $la), 2) + POW(69.1 * ($lo - longitude) * COS(lattitude / 57.3), 2)) AS distance FROM image  HAVING distance < 60 ORDER BY distance");
    $i=0;
    if(mysql_affected_rows()>0)
{
   

    while($r1=mysql_fetch_row($sel1))
    {
         
        
        
        
        echo "<div onclick='dynamic_loc($r1[1],$r1[2],$i)'><h3>$r1[3]</h3></div>";
       
        ?>
                                        
                                        <div class="zoomin frame">
                                            
                                            <div class="col-lg-6">  <div   id="dvMap<?php echo $i; ?>" style="width: 550px; height: 250px;"></div></div>
                                            <div class="col-lg-6">  <div style="float: right"><img style="width: 550px; height: 250px;"style="width: 550px; height: 250px;" src="pic/<?php echo $r1[4] ?>"</div></div>
                                        </div>
                                        <hr>
                                        
                                        <hr><hr><hr>
<?php
$i++;
    }
    }
    
 else {
        header("location:error.php");
    }
    


?>
                                    
                                    
                                    
                                    </div>
  							
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
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
		   </div>
		<!--end-wrap-->
	</body>
</html>

