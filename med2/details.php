<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];
$sel1=mysql_query("select * from hosreg where uid='$hid'");
    $r1=mysql_fetch_row($sel1);
    
    
$sel2=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel2)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel2);
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
		<title>medicare Website Template | About :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
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
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
   
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
        }
  
  </script>
        </head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href=""><span style="color: steelblue;font-size: 60px;"><?php echo $fc[1] ?></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
                                <div class="top-nav" style="font-size: 12px">
					<ul>
                                            <li><a href="hospital.php" style="text-decoration: none">Home</a></li>
                                            
                                            <li><a href="add_dep.php" style="text-decoration: none">Departments</a></li>
                                            <li><a href="adddoc.php"style="text-decoration: none">Add_Doctors</a></li>    
                                            <li><a href="staffreg.php" style="text-decoration: none">Staff_Registration</a></li>
                                                
                                                <li><a href="icu.php"style="text-decoration: none">Manage_ICU</a></li>
                                                <li><a href="faci.php"style="text-decoration: none">Facilities</a></li>
                                                <li><a href="gallery.php"style="text-decoration: none">Add Gallery</a></li>
                                                <li><a href="logout.php"style="text-decoration: none">Sign </a></li>
					</ul>			
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   
		   <div class="wrap">
		   	<div class="about">
                            <br>
                            <h4 style="margin-left: 30px">ADD_DEPARTMENT</h4>
                                <br><br>
		   <div class="content-box">
		   <div class="section group">
                       <div class="col-lg-6" style="margin-left: 40px">
                                    <form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th>
                                                    <label style="color: gray"> Blood Group</label>
                                                </th>
                                                <th>
                                                    <select name="typ"class="form-control">
                                                        <option value="--Select Blood Type--">--Select Blood Type--</option>
                                                                <option>A+</option>
                                                                <option>A-</option>
                                                                <option>B+</option>
                                                                <option>B-</option>
                                                                <option>AB+</option>
                                                                <option>AB-</option>
                                                                <option>O+</option>
                                                                <option>O-</option>
                                                    </select>
                                                </th>
                                                
                                            </tr>
                                            
                                            
                                            
                                             
                                            
                                            
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="sub"value="SEARCH" class="btn btn-sm btn-primary">
                                                </th>
                                                
                                            </tr>
                                             </table>
                                         </form>
                                        <?php

if(isset($_POST['sub']))
{
        
    $la=substr($r1[11],0,7);
    $lo=substr($r1[12],0,7);
    $sel=mysql_query("SELECT id,nme,la,lo,addr,cont,uid, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM blood_reg where typ='$_POST[typ]' HAVING distance < 60 ORDER BY distance");
    $i=0;
    if(mysql_affected_rows()>0)
{
   

    while($r=mysql_fetch_row($sel))
    {
         
        
        
        
        echo "<div onclick='dynamic_loc($r[2],$r[3],$i)'><h3>$r[1]</h3> <br/>$r[4]<br/>$r[5]</div>";
       
        ?>
                                        
                          <br/>
                                        <a href="details.php?cid=<?php echo $r[0] ?>" class="btn btn-danger">More</a>              
                         <div  id="dvMap<?php echo $i; ?>" style="width: 550px; height: 250px;"></div>               
                                        <?php
$i++;
    }
    }
    
 else {
       echo '<img src="images/noresult.png">';
    }
    
}

?>
                                            <?php
                                            
                                            if(isset($_GET['su']))
                                            {
                                                if($_GET['su']=="1")
                                                {
                                                    echo "Data saved successfully";
                                                }
                                                if($_GET['su']=="2")
                                                {
                                                    echo "Error found!try again";
                                                }
                                            }
                                        ?>
                                                
                                       
                                    </form>
                                     <form method="post">
                                         <?php
                                         if(isset($_POST['updt']))
                                         {
//                                             $dt=$_POST['dt'];
                                             if(isset($_GET['ed']))
                                             {
                                                 $edtt=$_GET['ed'];
                                             }
                                             $des=$_POST['des'];
                                             
                                             $upd=  mysql_query("update add_dep set des='$des' where hosid='$hid'and dept='$edtt'");
                                             if($upd>0)
                                             {
//                                                 header("location:add_dep.php?us=1");
                                                 echo "updated successfully";
                                                 
                                             }
                                             else
                                             {
//                                               header("location:add_dep.php?us=2");  
                                             }
                                         }
                                         
                                         
                                         
                                         
                                         ?>
                                    <?php
                                    if(isset($_GET['ed']))
                                    {
                                        $edt=$_GET['ed'];
                                        $eed=  mysql_query("select * from add_dep where hosid='$hid' and dept='$edt'");
                                        if(mysql_num_rows($eed)>0)
                                        {
                                            $erd=  mysql_fetch_row($eed);
                                        }
                                        ?>
                                         
                                         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="add_dep.php" style="text-align: right">BACK</a>
                                         <br><br>
                                         <table class="table table-bordered table-responsive">
                                             <tr>
                                                 <th>
                                                     <label style="color: gray">  DEPARTMENT</label>
                                                 </th>
                                                 <th>
                                                     <label style="color: gray"> DESCRIPTION</label>
                                                 </th>
                                             </tr>
                                             <tr>
                                                 <th>
                                                     <input type="text" name="dt" value="<?php echo $erd[2] ?>"readonly="">
                                                 </th>
                                                 <th>
                                                     <textarea name="des" value="">  <?php echo $erd[3] ?></textarea>                                               </th>
                                             </tr>
                                             <tr>
                                                 <th colspan="2">
                                                     <input type="submit" name="updt" value="UPDATE" class="btn btn-sm btn-primary">
                                                 </th>
                                             </tr>
                                         </table>
                                         <?php
                                         if(isset($_GET['us']))
                                         {
                                             if($_GET['su']=="1")
                                             {
                                                 echo "Data updated successfully ";
                                             }
                                             if($_GET['su']=="2")
                                             {
                                                 echo "Error found!Try again";
                                             }
                                         }
                                         
                                         ?>
                                         
                                    <?php
                                    }
                                    
                                    
                                    
                                         
                                         else
                                            {
                                             ?>
                                         <br>
                                    <h4>Available Departments</h4>
                                    <br>
                                   
                                    <table class="table table-bordered table-responsive">
                                        <tr>
                                            <th>
                                                <label style="color: gray"> NAME</label>
                                            </th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <?php
                                        $ad=  mysql_query("select * from add_dep where hosid='$hid' order by id desc");
                                        if(mysql_num_rows($ad)>0)
                                        {
                                            while ($adr=mysql_fetch_row($ad))
                                            {
                                        ?>
                                        <tr>
                                            <th style="color: grey" >
                                                <?php echo $adr[2]?>
                                            </th>
                                            <th>
                                                <a href="add_dep.php?ed=<?php echo $adr[2] ?>" class="btn bg-infoqqqqq">EDIT</a>
                                            </th>
                                            <th>
                                                <a href="add_dep.php?del=<?php echo $adr[2] ?>" style="text-decoration: none;display: block;width: 65px;background-color: lightgray;border-radius: 5px;padding: 5px;">DELETE</a>
                                            </th>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
                                        
                                        
                                    </table>
                                        <?php
                                        }
                                        if(isset($_GET['ds']))
                                        {
                                            if($_GET['ds']=="1")
                                            {
                                                echo "Data deleted successfully";
                                            }
                                            if($_GET['ds']=="2")
                                            {
                                                echo "Error found!Try again";
                                            }
                                        }
                                        ?>
                                   
				</div>
				
                       <div class="col_1_of_3 span_1_of_3 frist" style="margin-left: 80px">
					<h3>Enjoy the glow of good health</h3>
                                        <img src="pic/home2.jpg" title="" />
                                        <span><p style="text-align: justify;text-indent: 10px;font-size: 15px;color: steelblue">To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first discipline and control one's own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.</p>
</span> <br /><br />
                                        <img src="pic/hm8.jpg" title="" />
                                        <span><p style="text-align: justify;text-indent: 10px;font-size: 15px;color: steelblue">Time and health are two precious assets that we don't recognize and appreciate until they have been depleted.
</p></span>
				</div>
			</div>
		   </div>
		   </div>
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

