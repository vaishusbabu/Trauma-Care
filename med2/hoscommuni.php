<?php
include("connect.php");
if(isset($_GET['aid']))
{
    $sel=mysql_query("select * from accident_cid where accident_id='".$_GET['aid']."'");
    $r=mysql_fetch_row($sel);
    $cid=$r[3];
}
if(isset($_POST['sub']))
{
    $msg=addslashes(nl2br($_POST['msg']));
    $ins_msg=mysql_query("insert into user_communi VALUES('','$cid','$msg','user')");
    if($ins_msg>0)
    {
        header("location:hoscommuni.php?aid=".$_GET['aid']);
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
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>medicare <?php echo $cid ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <script src="js/jquery.min.js"></script>
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
        <body onload="update()">
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
                                <div class="topnav" id="myTopnav">
                                    <a href="index.php" style="text-decoration: none">Home</a>
                                    <a href="hosreg.php" style="text-decoration: none">Hospital registration</a>
                                    <a href="emerg1.php" style="text-decoration: none">Emergency</a>
                                    <a href="searchhos.php" style="text-decoration: none">Search Hospital</a>
                                    <a href="viewgallery.php" style="text-decoration: none">Gallery</a>
                                    <a href="login.php" style="text-decoration: none">Login</a>
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
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="container">
		   	<div class="">
		   	<div class="">				
                            			
				<div class="col-lg-8">
				  <div class="">
                                      <form method="post">
                                          <br><br><br>
                                          <table class="table table-bordered table-responsive">
                                              <tr>                                                  
                                                  <td>
                                                      <b>START CHAT HERE</b>
                                                      <textarea name="msg" rows="5" class="form-control" ></textarea>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td colspan="2">
                                                      <input type="submit" name="sub" value="SEND MESSAGE" class="btn btn-sm btn-primary pull-right">
                                                  </td>
                                              </tr>
                                          </table>
                                          <script>
                                          function update() {                                             
                                                $.get("loadchat1.php?cid=<?php echo $cid ?>", function(data) {
                                                    $("#mssg").html(data);
                                                });
                                                window.setTimeout("update();", 100);
                                            }
                                          </script>
                                          <div id="mssg">
                                          <?php
                                          $sel_msg=mysql_query("select * from user_communi where cid='$cid' order by id desc");
                                          if(mysql_num_rows($sel_msg)>0)
                                          {
                                              while($rms=mysql_fetch_row($sel_msg))
                                              {
                                                  if($rms[3]=="user")
                                                  {
                                                      $al="left";
                                                  }
                                                  else
                                                  {
                                                      $al="right";
                                                  }
                                                ?>
                                          <div style="padding: 5px; width: 80%; border: 1px solid white; box-shadow: 0px 0px 2px black; float: <?php echo $al ?>; margin-top: 5px;">
                                              <?php echo $rms[2] ?>
                                          </div>
                                          <?php
                                              }
                                          }                                          
                                          ?>
                                          </div>
                                      </form>
				    </div>
  				</div>	
                            <div class="col-lg-4">
                                <img src="pic/logo1.jpg" class="img img-responsive" />
                                <img src="pic/logo2.jpg" class="img img-responsive" />
                                <img src="pic/logo1.jpg" class="img img-responsive" />
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

