<?php
include("connect.php");
if(isset($_GET['hr']))
{
    $hd=$_GET['hr'];
    $n=mysql_query("select * from hosreg where uid='$hd'");
    if(mysql_num_rows($n)>0)
    {
        $nr=mysql_fetch_row($n);
    }
    
    
    
    
    
    
    
    $nb=mysql_query("select * from blood where hid='$hd'");
    if(mysql_num_rows($nb)>0)
    {
        $nbl=mysql_fetch_row($nb);
    }
    
    
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Trauma Care | More Details...</title>
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
                                    <h4>More Details About  <p><?php echo $nr[1] ?></p></h4>
		    			
		    			<div class="image group">
				<div class="grid images_3_of_1">
                                    <img src="pic/<?php echo $nr[13] ?>">
				</div>
				<div class="grid span_2_of_3">
					<form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                    DETAILS
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    NAME
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[1] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    ADDRESS
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[2] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    CONTACT NO
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[6] ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    E-MAIL
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[5] ?>
                                                </th>
                                            </tr>
                                        </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        ABOUT US
                                                    </th>
                                                </tr>
                                                <?php
                                                $na=mysql_query("select * from about_us where hid='$hd'order by id desc");
                                                if(mysql_num_rows($na)>0)
                                                {
                                                  $nrn=mysql_fetch_row($na);
                                                  ?>
                                                  <tr>
                                                    <th>
                                                        <?php echo $nrn[2] ?>
                                                    </th>
                                                </tr>
                                                <?php
                                                }
                                                
                                                
                                                ?>
                                                
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        DEPARTMENTS
                                                    </th>
                                                </tr>
                                                <?php
                                                
                                                $nd=mysql_query("select * from add_dep where hosid='$hd'");
                                                    if(mysql_num_rows($nd)>0)
                                                             {
                                                              while($nrd=mysql_fetch_row($nd))
                                                              {
                                                
                                                ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $nrd[2] ?>
                                                    </th>
                                                </tr>
                                                <?php
                                                              }
                                                             }
                                                             ?>
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="3" style="color: steelblue; font-size: 20px ">
                                                        DOCTORS
                                                    </th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th style="color: steelblue; font-size: 15px ">
                                                        NAME                                                    </th>
                                                    <th style="color: steelblue; font-size: 15px ">
                                                        DEPARTMENT
                                                    </th>
                                                    <th>
                                                        
                                                    </th>
                                                </tr>
                                                <?php
                                                $ndo=mysql_query("select * from add_doc where hid='$hd'");
                                                    if(mysql_num_rows($ndo)>0)
                                                    {
                                                     
                                                    while($ndc=mysql_fetch_row($ndo))
                                                    {
                                                
                                                ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $ndc[3] ?>
                                                    </th>
                                                    <th>
                                                        <?php echo $ndc[2] ?>
                                                    </th>
                                                    <th>
                                                        <img src="pic/<?php echo $ndc[18] ?>"style="width:100px;height: 100px">
                                                    </th>
                                                </tr>
                                                
                                                <?php
                                                    }
                                                    }
                                                    ?>
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        FACILITIES
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: steelblue;font-size: 15px">
                                                        Blood Bank
                                                    </th>
                                                    <th>
                                                        <?php echo $nbl[2] ?>
                                                    </th>
                                                </tr>
                                                
                                                <tr>
                                                    <th style="color: steelblue;font-size: 15px">
                                                        Ventilator
                                                    </th>
                                                    <th>
                                                    <?php
                                                    $nv=mysql_query("select * from ventilator where hid='$hd'");
                                                    if(mysql_num_rows($nv)>0)
                                                     {
                                                          $nbv=mysql_fetch_row($nv);
                                                          ?>
                                                          
                                                        <?php echo $nbv[2] ?>
                                                   
                                                    <?php
                                                         }
                                                    
                                                    
                                                    ?>
                                                    </th> 
                                                </tr>
                                            </table>
                                    </form>
                                
                                </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
<!--		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/staff1.jpg">
				</div>-->
				
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
<!--		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>-->
<!--		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/staff2.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>-->
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					
				</div>
<!--				<div class="grid span_2_of_3">
					
			   </div>-->
		   </div>
		   
		    		</div><br />
		    		<div class="clear"> </div>
		    		<div class="pagnation">
		    			
		    		</div>
		    	</div>
		    </div>
		   <div class="clear"> </div><br /><br />
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="">
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

