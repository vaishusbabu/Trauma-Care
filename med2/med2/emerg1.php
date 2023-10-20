<?php
ob_start();
include("connect.php");
if(isset($_POST['snd']))
{
    $pic=$_FILES['pic']['name'];
    $lt=$_POST['lt'];
    $lg=$_POST['lg'];
$tmp=0;
$gs= mysql_query("SELECT lattitude, longitude, SQRT(POW(69.1 * (lattitude - $lt),2) +POW(69.1 * ($lg - longitude) * COS(lattitude / 57.3), 2)) AS distance FROM hosreg HAVING distance < 5 ORDER BY distance");
// echo mysql_error();
        if(mysql_num_rows($gs)>0)
         {

              while ($gr=mysql_fetch_row($gs))
                  {
     $lat=$gr[0];
     $log=$gr[1];
     
$hs=  mysql_query("select * from hosreg where lattitude='$lat' and longitude='$log' and status='1'");
if(mysql_num_rows($hs)>0)
{
    $tmp=1;
    while ($hr=mysql_fetch_row($hs))    
    {
    $hd=$hr[8];
    $sel_aid=mysql_query("select * from accident_id");
    $raid=mysql_fetch_row($sel_aid);
    $acid=$raid[1];                                                    
     $ims=  mysql_query("insert into image values('','$acid','$hd','$pic','$lt','$lg','0','".date('Y-m-d')."')");
    move_uploaded_file($_FILES['pic']['tmp_name'],  getcwd()."//pic//$pic");
    }

}
}
}
if($tmp>0)
{
    $up=mysql_query("update accident_id set num=num+1");
    if($up>0)
    {
     header("location:emerg1.php?aid=$acid");
    }
}
else
{
    header("location:emerg1.php?error=1");
}
}
if(isset($_GET['cid']))
{
    $aid=$_GET['aid'];
    $id=$_GET['id'];
    $cid=$_GET['cid'];
    $hid=$_GET['hid'];
    $up= mysql_query("update image set status='4' where acc_id='$aid' and id!='$id'");
    if($up>0)
    {
        $upd= mysql_query("update image set status='3' where acc_id='$aid' and id='$id'");
        if($upd>0)
        {
            $ins=mysql_query("insert into accident_cid values('','$hid','$aid','$cid')");
            if($ins>0)
            {
                header("location:hoscommuni.php?aid=$aid");
            }
        }
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
		<title>Trauma Care | Emergency</title>
                <link href="images/logo_1.png" rel="shortcut icon">
                <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
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
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

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
                center: new google.maps.LatLng(8.5241, 76.9366),
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
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
						
				<div class="col-lg-12">
				  <div class="contact-form">
                                      <br>
                                      <h2 style="color: gray">EMERGENCY</h2>
                                        <br>
                                        <?php
                                        if(isset($_GET['error']))
                                        {
                                            ?>
                                        <div class="alert alert-danger">No Approved Hospital found in this location.. <a href="emerg1.php" class="label label-danger pull-right">CLEAR</a></div>
                                        <?php
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
                                                    <td>Facility</td>
                                                    <td>Theater</td>
                                                    <td>ICU Status</td>
                                                    
                                                    <td>You can Choose</td>
                                                </tr>
                                                                                               
                                            <?php
                                            $i=0;
                                                 while($rs=mysql_fetch_row($sel_data))
                                                 {
                                                     $hid=$rs[2];
                                                     
                                                     
                                                     
                                                     
                                                     $o=  mysql_query("select * from optr where hid='$hid'");
                                                     $or=mysql_fetch_row($o);
                                                     
                                                     $ic=  mysql_query("select * from add_icu where hosid='$hid'");
                                                     $ir=mysql_fetch_row($ic);
                                                     
                                                    
                                                     
                                                     $ds=  mysql_query("select * from hosreg where uid='$hid'");
                                                     $hrd=mysql_fetch_row($ds);
                                                     $i++;
                                                    ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><b><?php echo $hrd[1] ?></b><br />
                                                        <?php echo $hrd[2] ?><br/><?php echo $hrd[6] ?><br />
                                                        <?php echo $hrd[5] ?>
                                                        <center><BR />
                                                        <?php
                                                            $a="01234567899876543210";
                                                            $b="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                                            $a1=str_shuffle($a);
                                                            $b1=str_shuffle($b);
                                                            $c="$a1$b1";
                                                            $otp=substr(str_shuffle($c),7,4);
                                                        if($rs[6]=='0')
                                                        {
                                                        ?>
                                                        <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: steelblue;color: white;border-radius: 20px;">Waiting...</a>
                                                       
                                                         <?php
                                                        }
                                                        else if($rs[6]=='1')
                                                        {
                                                            
                                                        ?>
                                                        <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: green;color: white;border-radius: 20px;">Approved!!!</a>
                                                       
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                       
                                                       ?>
                                                         <a href="" style="display: block;width: 70px;text-align: center;text-decoration: none;background-color: red;color: white;border-radius: 20px;">Rejected!!!</a>
                                                </center>
                                                    
                                                    <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    
                                                    <td>Blood Bank:<?php 
                                                    $b=  mysql_query("select * from blood where hid='$hid'");
                                                    if(mysql_num_rows($b)>0)
                                                    {
                                                     $br=mysql_fetch_row($b);
                                                    if($br[2]=="No")
                                                    {
                                                        ?>
                                                        <img src="icon/red.png" style="width: 18px" class="pull-right" />
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <img src="icon/green.png" style="width: 18px" class="pull-right" />
                                                        <?php
                                                    }
                                                    }                                                    
                                                    ?>
                                                    <br />
                                                    Ventilator : 
                                                    <?php
                                                    $v=  mysql_query("select * from ventilator where hid='$hid'");
                                                    if(mysql_num_rows($v)>0)
                                                    {
                                                     $vr=mysql_fetch_row($v);
                                                    if($vr[2]=="No")
                                                    {
                                                        ?>
                                                    <img src="icon/red.png" style="width: 18px" class="pull-right" />
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                    <img src="icon/green.png" style="width: 18px" class="pull-right" />
                                                        <?php
                                                    }
                                                    }
                                                    ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $sel_t=mysql_query("select * from  optr where hid='$hid'");
                                                        //echo"$hid";
                                                        if(mysql_num_rows($sel_t)>0)
                                                        {
                                                            while($rt=  mysql_fetch_row($sel_t))
                                                            {
                                                                echo $rt[2];
                                                                if($rt[4]=="Yes")
                                                                {
                                                                    ?>
                                                                <img src="icon/red.png" style="width: 18px" class="pull-right" />
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                <img src="icon/green.png" style="width: 18px" class="pull-right" />
                                                                    <?php
                                                                }
                                                                echo"<br />";
                                                               //echo "$rt[3] <br/> $rt[4] </label><br/>";
                                                    
                                                            }
                                                        }
                                                        
                                                           ?> 
                                                        
                                                    </td>
                                                    <td><?php 
                                                    
                                                    echo $ir[2] ?><?php echo $ir[3] ?><label style="color: blue"><?php echo $ir[7] ?></label></td>
                                                    
                                                
                                                    <td><BR /><center>
                                                        <a href="emerg1.php?aid=<?php echo $_GET['aid'] ?>&id=<?php echo $rs[0] ?>&cid=<?php echo $otp ?>&hid=<?php echo $rs[2] ?>" class="btn btn-sm btn-success" >Choose</a>
                                                        <a style="display: none;" href="hoscommuni.php?aid=<?php echo $_GET['aid'] ?>&id=<?php echo $rs[0] ?>&cid=<?php echo $otp ?>" class="btn btn-sm btn-success" >Choose</a>
                                                    </center>
                                                        
                                                        
                                                    </td>
                                                
                                                </tr>
                                                <?php
                                                        
                                                   
                                                
                                                 }
                                                 ?>
                                            </table>
                                                <?php
                                             }
                                                }
                                                else
                                                {
                                                         ?>
                                        <form method="post" enctype="multipart/form-data">
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th style="color: gray">
                                                       Upload Picture
                                                    </th>
                                                    <th>
                                                        <input type="file"name="pic"class="form-control" accept="image/*" id="capture" capture="camera"> 
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                <center>
                                                <div id="dvMap" style="width: 100%; height: 500px"></div>
                                        
                                    </div>
                                                </center>
                                                    </td>
                                            </tr>
                                            
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
                                                    <th colspan="2" style="padding-left: 45%;">
                                                        <input type="submit" name="snd" class="btn btn-xs btn-default"value="SEND">
                                                    </th>
                                                </tr>
                                            </table>
                                            <br>
                                            
                                            </table>
                                            
                                                
					    </form>
                                        <?php
                                                }
                                                ?>
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
		   	<div class="">
		   			<ul>
						
					</ul>
		   	</div>
		   	<div class="footer-centre">
		   		<p>Copyright © 2019 <a href="http://tarumacare.in/">Trauma Care</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

