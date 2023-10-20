<?php
include("connect.php");
if(isset($_POST['fdk']))
{
    $un=$_POST['un'];
     $uid=$_POST['ud'];
    $hn=$_POST['hs'];
    $fd=$_POST['fd'];
    $ptyp=$_POST['ptyp'];
    
    $fin=mysql_query("insert into feedback values('','$hn','$un','$fd','$ptyp')");
    if($fin>0)
    {
        header("location:feedback.php?sc=1");
    }
    
 else {
      header("location:feedback.php?sc=2");  
    }
}

if(isset($_POST['cmp']))
{
  $usn=$_POST['usn'];
 $usid=$_POST['usid'];
    $hsd=$_POST['hsd'];
    $wc=$_POST['wc']; 
    
    $cdn=  mysql_query("select * from ptreg");
    if(mysql_num_rows($cdn)>0)
    {
        $cnr=mysql_fetch_row($cdn);
        $cd=$cnr[10];
    }
    if($usid==$cd)
    {
    $cin=mysql_query("insert into feedback values('','$hsd','$usn','$wc','0')");
    if($cin>0)
    {
      header("location:feedback.php?dc=1");  
    }
    }
    else {
      header("location:feedback.php?dc=2");  
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
		<title>Trauma Care | Feedback Forum</title>
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
                
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <script src="js/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        -->
        
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
                            <div class="col span_1_of_3">
                                <img src="icon/logo3.png"  class="img img-responsive" />
                                <img src="icon/feedback.jpg"  class="img img-responsive" />
                            </div>	
                            
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
                                      
                                        <br>
                                        <form method="post">
                                            <script>
                                            function loadudata(x)
                                            {
                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        var data = this.responseText;
                                                        if(data=="0")
                                                        {
                                                            $("#fdk").hide();
                                                            $("#fdk1").show();
                                                        }
                                                        else
                                                        {
                                                            $("#fdk1").hide();
                                                            $("#fdk").show();
                                                            var data1=data.split(",");
                                                            document.getElementById("nm").value=data1[0];
                                                            document.getElementById("hs").value=data1[1];
                                                        }
                                                    }
                                                };
                                                xmlhttp.open("GET", "loadpdata.php?q=" + x, true);
                                                xmlhttp.send();
                                            }
                                            </script>
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue;font-size: 20px">
                                                      Post Feedback 
                                                    
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                               Communication ID
                                                    </th>
                                                    <th>
                                                        <input type="text" name="ud" onblur="loadudata(this.value)" class="form-control">
                                                    </th>
                                                </tr>
                                                
                                                <tr>
                                                    <th style="color: gray">
                                               Name
                                                    </th>
                                                    <th>
                                                        <input type="text" name="un" id="nm" class="form-control">
                                                    </th>
                                                </tr>                                               
                                                <tr>
                                                    <th style="color: gray">
                                                        Hospital ID
                                                    </th>
                                                    <th>
                                                        <input type="text" name="hs" id="hs" class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>Post Type</td>
                                                    <td>
                                                        <select name="ptyp" class="form-control">
                                                            <option value="1">Feedback</option>
                                                            <option value="0">Complaints</option>
                                                        </select>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <th style="color: gray">
                                                        Write feedback
                                                    </th>
                                                    <th>
                                                        <textarea name="fd" class="form-control"></textarea>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        <input type="submit" name="fdk" id="fdk" value="POST NOW" class="btn btn-sm btn-primary">
                                                <div class="btn btn-danger" id="fdk1" style="display: none; padding: 10px">Invalid ID</div>
                                                    </th>
                                                </tr>                                           
                                                                                             
                                                
                                            </table>
                                            <?php
                                            if(isset($_GET['sc']))
                                            {
                                                $suc=$_GET['sc'];
                                                if($suc=="1")
                                                {
                                                    echo "Posted successfully";
                                                }
                                                if($suc=="2")
                                                {
                                                    echo "Error found ! try again";
                                                }
                                            }
                                            
                                            
                                            ?>
                                            <br>
                                            
                                            
                                            
                                        </form>    
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
						
					</ul>
		   	</div>
		   	<div class="footer-centre">
                            <p style="">Copyright © 2019 <a href="http://tarumacare.in/">Trauma Care</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

