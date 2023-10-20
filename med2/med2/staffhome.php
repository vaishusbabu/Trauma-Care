<?php
include("connect.php");
session_start();
$sid=$_SESSION['stf'];
$ssel=  mysql_query("select * from staff_reg where uid='$sid'");
if(mysql_num_rows($ssel)>0)
{
    $sr=mysql_fetch_row($ssel);
    $shid=$sr[1];
}
else{
    header("location:login.php");
}
$hn=mysql_query("select * from hosreg where uid='$shid'");
if(mysql_num_rows($hn)>0)
{
    $shr=mysql_fetch_row($hn);
    $id=$shr[8];
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
if($_SESSION['stf'])
{
    
}
 else
     {
    header("location:index.php");    
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
		<title>medicare Website Template | blog :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <script src="js/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

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
	<body onload="update()">
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                                    <a href="staffhome.php" style="text-decoration: none"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[3] ?>&nbsp &nbsp<img src="staff_pic/<?php echo $sr[11] ?> "style="width: 70px;height: 70px"></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="staffhome.php"style="text-decoration: none">Home</a></li>
						<li><a href="patientreg.php" style="text-decoration: none">Patient_Registration</a></li>
						<li><a href="hinfo.php"style="text-decoration: none">Update_Information</a></li>
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
		    			<h4><?php echo $shr[1] ?></h4>
		    			<div class="blog-grid-header">
		    				
		    				
		    			</div>
		    			<div class="image group">
				<script>
                                          function update() {  
                                              $.get("loadacc.php", function(data) {
                                                    $("#acc").html(data);
                                                });
                                                window.setTimeout("update();", 100);
                                            }
                                          </script>
				<div class="col-lg-12">
                                    <div id="acc">
                                    <form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                
                                                <th colspan="9"style="color: steelblue;font-size: 25px">
                                                    ACCIDENT NOTIFICATION
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                               
                                                <th style="color: gray">
                                                    PICTURE
                                                </th>                                                
                                                <th style="color: gray">
                                                    LATTITUDE
                                                </th>
                                                <th style="color: gray">
                                                    LONGITUDE
                                                </th>                                                
                                                <th colspan="2"></th>
                                                
                                            </tr>
                                            
                                            <?php
                                            $msl=  mysql_query("select * from image where hid='$id' and dt='".date('Y-m-d')."' order by id desc");
                                            if(mysql_num_rows($msl)>0)
                                            {
                                                while ($mr=mysql_fetch_row($msl))
                                                {
                                            ?>
                                            <tr>
                                                <th>
                                                    <img src="pic/<?php echo $mr[3] ?>"style="width: 150px;height: 150px"> 
                                                </th>
                                               
                                                <th>
                                                    <?php echo $mr[4] ?>
                                                </th>
                                                <th>
                                                    <?php echo $mr[5] ?>
                                                </th>                                                
                                                <th colspan="2">
                                                   <?php
                                                   if($mr[6]=="1")
                                                   {
                                                       
                                                   ?> 
                                                    <a href="" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: steelblue;border-color: black;color: white">Approved</a>
                                               <?php
                                                   }
                                                   
                                                   else if($mr[6]=="2")
                                                   {
                                                   ?>
                                                    <a href="" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: red;border-color: black;color: white">Rejected</a>
                                               <?php
                                                   }
                                                   else if($mr[6]=="3")
                                                   {
                                                   ?>
                                                    <span class="label label-success"><a target="_BLANK" href="hcommunication.php?aid=<?php echo $mr[1] ?>">Patients Selected Your Hospital</a></span>
                                               <?php
                                                   }
                                                   else if($mr[6]=="4")
                                                   {
                                                   ?>
                                                    <span>They are Moved to Other Hospital</span>
                                               <?php
                                                   }
                                                   else if($mr[6]=="5")
                                                   {
                                                   ?>
                                                    <span>Admitted</span>
                                               <?php
                                                   }
                                                   
                                                   else
                                                    {
                                                   ?>
                                                    
                                                    <a href="staffhome.php?t=<?php echo $mr[0]?>" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: green;border-color: black;color: white">Approve</a>
                                               
                                                    
                                                    <br>
                                                    <a href="staffhome.php?p=<?php echo $mr[0]?>" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: red;border-color: black;color: white">Reject</a>
                                               <?php
                                                    }
                                                    ?>
                                                </th>
                                                
                                            </tr>
                                            <?php
                                                } 
                                            }
                                            ?>
                                            
                                            
                                            
                                            
                                        </table>
                                    </form>
                                        </div>
			   </div>
		   </div>
		   
		    		</div>
		    		
		    		
		    		
		    		
		    	</div>
		    </div>
		   <div class="clear"> </div><br /><br />
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

