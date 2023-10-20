<?php
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
		<title>Trauma Care | Search Hospital</title>
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
			<div class="blog">
		    		<div class="blog-grid">
		    			<h4>SEARCH HOSPITAL</h4>
		    			<div class="blog-grid-header">
		    				
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/box-img1.jpg">
				</div>
				<div class="grid span_2_of_3">
					<form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    NAME
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    ADDRESS
                                                </th>
                                                <th></th>
                                            </tr>
                                            <?php
                                            $hdt=mysql_query("select * from hosreg where status='1'");
                                            if(mysql_num_rows($hdt)>0)
                                            {
                                            while($gr=mysql_fetch_row($hdt))
                                            {
                                                
                                            ?>
                                                                                  
                                                                                      
                                            <tr>
                                                <th>
                                                    <?php echo $gr[1] ?>
                                                </th> 
                                                <th>
                                                    <?php echo $gr[2] ?>
                                                </th> 
                                                <th>                                                    
                                                    <a href="searchhosmore.php?hr=<?php echo $gr[8] ?>" style="color: white; display: block;width: 50px;background-color: steelblue;padding: 10px;margin: 10px;text-decoration: none"> more</a>
                                                </th> 
                                            </tr>
                                            
                                            
                                            <?php
                                            }
                                            }
                                            else
                                            {
                                                ?>
                                            <tr>
                                                <td colspan="4">No Data Available</td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </form>
                                
                                </div>
		   </div>
		   
		    		</div>
		    		<!--<div class="blog-grid">
		    			
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/staff1.jpg">
				</div>
				<div class="grid span_2_of_3">
                                    
                                </div>
		   </div>
		   
		    		</div> -->
		    		
		    		
		    		<div class="clear"> </div>
		    		
		    	</div>
		    </div>
		   <div class="clear"> </div><br /><br />
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="">
		   			<ul>
					</ul>
		   	</div>
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

