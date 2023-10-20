<?php
ob_start();
include("connect.php");

            
        
            


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
        
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href=""><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="index.php" style="text-decoration: none">Home</a></li>
                                            <li><a href="hosreg.php" style="text-decoration: none">Hospital registration</a></li>
                                            <li><a href="emergency.php" style="text-decoration: none">Emergency</a></li>
                                            <li><a href="searchhos.php" style="text-decoration: none">Search Hospital</a></li>
                                            <li><a href="viewgallery.php" style="text-decoration: none">Gallery</a></li>
                                            <li><a href="login.php"target="_blank" style="text-decoration: none">Login</a></li>
						
                                            <li><a href="feedback.php" style="text-decoration: none">Feedback</a></li>
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
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2><br />
			    	 		<div class="map">
                                                    
                                    <div id="dvMap" style="width: 100%; height: 500px"></div>
                                        
                                     
					   	
<!--                                                    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		-->
                                                </div>
      				</div>
      			<div class="company_address">
				     	
                        </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
                                      <h2 style="color: gray">EMERGENCY</h2>
                                        <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th style="color: gray">
                                                       Upload Picture
                                                    </th>
                                                    <th>
                                                        <input type="file"name="pic"class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                <center>
                                                    <div onclick="getLocation()" class="btn btn-sm btn-danger">GET MY LOCATION </div>
                                                </center>
                                                    </td>
                                            </tr>
                                            <script>
                                            function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        //x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    document.getElementById("la").value=position.coords.latitude;
    document.getElementById("lo").value=position.coords.longitude;
    var mapOptions = {
                center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
    
}
                                            </script>
                                              <tr>
                                                    <th style="color: gray">
                                                        Lattitude
                                                    </th>
                                                    <th>
                                                        <input type="text"name="lt" id="la" class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                                        Longitude
                                                    </th>
                                                    <th>
                                                        <input type="text"name="lg" id="lo" class="form-control">
                                                    </th>
                                                </tr>
                                                
                                                <tr>
                                                    <th colspan="2">
                                                        <input type="submit" name="snd"value="SEND">
                                                    </th>
                                                </tr>
                                            </table>
                                            <br>
                                            <?php
                                                if(isset($_POST['snd']))
                                                {
                                                 $pic=$_FILES['pic']['name'];
                                                    $lt=$_POST['lt'];
                                                    $lg=$_POST['lg'];
    
                                                $gs= mysql_query("SELECT lattitude, longitude, SQRT(POW(69.1 * (lattitude - $lt),2) +POW(69.1 * ($lg - longitude) * COS(lattitude / 57.3), 2)) AS distance FROM hosreg HAVING distance < 25 ORDER BY distance");
                                               // echo mysql_error();
                                                        if(mysql_num_rows($gs)>0)
                                                         {
        
                                                              while ($gr=mysql_fetch_row($gs))
                                                                  {
						    $lat=$gr[0];
                                                     $log=$gr[1];
                                                $hs=  mysql_query("select * from hosreg where lattitude='$lat' and longitude='$log'");
                                                if(mysql_num_rows($hs)>0)
                                                {
                                                    while ($hr=mysql_fetch_row($hs))    
                                                    {
                                                    $hd=$hr[8];
                                                    $sel_aid=mysql_query("select * from accident_id");
                                                    $raid=mysql_fetch_row($sel_aid);
                                                    $acid=$raid[1];
                                                     $ims=  mysql_query("insert into image values('','$acid','$hd','$pic','$lt','$lg','0')");
                                                    move_uploaded_file($_FILES['pic']['tmp_name'],  getcwd()."//pic//$pic");
                                                    }
                                                    
                                               }
                                              }
                                             }
                                             $up=mysql_query("update accident_id set num=num+1");
                                             if($up>0)
                                             {
                                                 header("location:emergency.php?aid=$acid");
                                             }
                                                }
                                                if(isset($_GET['aid']))
                                                {
                                                    $acid=$_GET['aid'];
                                                
                                             $sel_data=mysql_query("select * from image where acc_id='$acid'");
                                             if(mysql_num_rows($sel_data)>0)
                                             {
                                                 ?>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>#</td>
                                                    <td>Hospital</td>
                                                    <td>Address</td>
                                                    <td>Contact</td>
                                                    <td>E-mail</td>
                                                    <td>Blood bank</td>
                                                    <td>Theature_Busy</td>
                                                    <td>ICU_Bed</td>
                                                    <td>Status</td>
                                                    <td>Select</td>
                                                </tr>
                                                                                               
                                            <?php
                                            $i=0;
                                                 while($rs=mysql_fetch_row($sel_data))
                                                 {
                                                     $hid=$rs[2];
                                                     $b=  mysql_query("select * from blood where hid='$hid'");
                                                     $br=mysql_fetch_row($b);
                                                     
                                                     $o=  mysql_query("select * from optr where hid='$hid'");
                                                     $or=mysql_fetch_row($o);
                                                     
                                                     $ic=  mysql_query("select * from add_icu where hosid='$hid'");
                                                     $ir=mysql_fetch_row($ic);
                                                     
                                                    
                                                     
                                                     $ds=  mysql_query("select * from hosreg where uid='$hid'");
                                                     if(mysql_num_rows($ds)>0)
                                                     {
                                                         
                                                     while($hrd=mysql_fetch_row($ds))
                                                     {
                                                     $i++;
                                                    ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $rs[2] ?></td>
                                                    <td><?php echo $hrd[2] ?></td>
                                                    <td><?php echo $hrd[6] ?></td>
                                                    <td><?php echo $hrd[5] ?></td>
                                                    <td><?php echo $br[2] ?></td>
                                                    <td><?php echo $or[2] ?><?php echo $or[3] ?><label style="color: blue"><?php echo $or[4] ?></label></td>
                                                    <td><?php echo $ir[2] ?><?php echo $ir[3] ?><label style="color: blue"><?php echo $ir[7] ?></label></td>
                                                    <td>
                                                        
                                                        <?php
                                                        $a="abcdefg12345";
                                                            $b="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                                            $a1=str_shuffle($a);
                                                            $b1=str_shuffle($b);
                                                            $c="$a1$b1";
                                                            $otp=substr($c,7,4);
                                                        if($rs[6]=='0')
                                                        {
                                                        ?>
                                                        <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: steelblue;color: white;border-radius: 20px;">Waiting</a>
                                                       
                                                         <?php
                                                        }
                                                        else if($rs[6]=='1')
                                                        {
                                                            
                                                        ?>
                                                        <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: green;color: white;border-radius: 20px;">Approved</a>
                                                       
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                       
                                                       ?>
                                                         <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: red;color: white;border-radius: 20px;">Rejected</a>
                                                       
                                                    </td>
                                                    <?php
                                                        }
                                                        ?>
                                                    <td>
                                                        <a href="hoscommuni.php?aid=<?php echo $_GET['aid'] ?>&id=<?php echo $rs[0] ?>&cid=<?php echo $otp ?>" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: blue;color: white;border-radius: 20px;">Choose</a>
                                                        
                                                        
                                                    </td>
                                                
                                                </tr>
                                                <?php
                                                        
                                                        
                                                     }
                                                     }
                                                
                                                 }
                                                 ?>
                                            </table>
                                                <?php
                                             }
                                                }
                                                         ?>
                                            </table>
                                            
                                                
					    </form>
				    </div>
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

