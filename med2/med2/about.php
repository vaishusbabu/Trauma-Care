<?php

include("connect.php");
session_start();
$hid=$_SESSION['hos'];
$ssl=mysql_query("select * from about_us  where hid='$hid' order by id desc");
if(mysql_num_rows($ssl)>0)
{
    $fc=mysql_fetch_row($ssl);
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
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
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
                                <div class="top-nav" style="font-size: 14px">
					<ul>
                                            <li><a href="hospital.php" style="text-decoration: none">Home</a></li>
                                            <li><a href="about.php" style="text-decoration: none">About</a></li>
                                            <li><a href="add_dep.php" style="text-decoration: none">Departments</a></li>
                                            <li><a href="adddoc.php"style="text-decoration: none">Add_Doctors</a></li>   
                                            <li><a href="staffreg.php" style="text-decoration: none">Staff_Registration</a></li>
                                                
                                                <li><a href="icu.php"style="text-decoration: none">Manage_ICU</a></li>
                                                <li><a href="faci.php"style="text-decoration: none">Facilities</a></li>
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
		   	<div class="about">
		   		<h4>About Us</h4>
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist">
					<h3>Did You Know?</h3>
                                        <img src="pic/<?php echo $fc[3] ?>" title="staff" />
                                        <span><p style="font-size: 15px"><?php echo $fc[2] ?></p></span>
					
					<a href="">Readmore</a>
				</div>
				<div class="col_1_of_3 span_1_of_3 second">
					<h3>Our Mission</h3>
					<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
					<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
					<ul>
						<li><a href="#"><img src="images/arrow.png">Primary Care Directory</a></li>
						<li><a href="#"><img src="images/arrow.png">Medical Fee Waiving Mechanism</a></li>
						<li><a href="#"><img src="images/arrow.png">Health Care Voucher</a></li>
						<li><a href="#"><img src="images/arrow.png">reprehenderit in voluptate</a></li>
						<li><a href="#"><img src="images/arrow.png">laboris nisi ut aliquip ex ean</a></li>
						<li><a href="#"><img src="images/arrow.png">Medical Fee Waiving Mechanism</a></li>
						<li><a href="#"><img src="images/arrow.png">Health Care Voucher</a></li>
						<li><a href="#"><img src="images/arrow.png">reprehenderit in voluptate</a></li>
					</ul>
				</div>
				<div class="col_1_of_3 span_1_of_3 frist">
					<h3>Our Staff</h3>
					<img src="images/staff1.jpg" title="staff" />
					<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco voluptate velit esse cillum dolore eu fugiat nulla pariatur </span> <br /><br />
					<img src="images/staff2.jpg" title="staff" />
					<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
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

