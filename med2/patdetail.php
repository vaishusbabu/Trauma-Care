<?php
include("connect.php");
if(isset($_GET['p']))
{
    $pi=$_GET['p'];
    $ps=  mysql_query("select * from ptreg where comid='$pi'");
    if(mysql_num_rows($ps)>0)
    {
        $psr=mysql_fetch_row($ps);
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
		<title>medicare Website Template | blog :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                
                
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
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
                                            <li><a href="admin.php" style="text-decoration: none">Home</a></li>
						<li><a href="addhos.php" style="text-decoration: none">Add Hospital</a></li>
						<li class=""><a href="manage.php" style="text-decoration: none">MANAGE_HOSPITALS</a></li>
						<li><a href="searchpt.php" style="text-decoration: none">SEARCH_PATIENT</a></li>
                                                <li><a href="approve.php" style="text-decoration: none">Approved_Hospitals</a></li>
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
			<div class="blog">
		    		<div class="blog-grid">
		    			<h4>Blog</h4>
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="col-lg-6">
					<img src="images/box-img1.jpg">
				</div>
				<div class="col-lg-6">
                                    <form method="post">
                                        <h2 style="color: steelblue">PATIENT DETAILS</h2>
                                        <table class=" table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: gray">
                                                    Name
                                                </th>
                                                <th>
                                                    <?php echo $psr[1] ?>
                                                 </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: gray">
                                                    Marital status
                                                </th>
                                                <th>
                                                    <?php echo $psr[4]?>
                                                 </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: gray">
                                                    Address
                                                </th>
                                                <th>
                                                    <?php echo $psr[6] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: gray">
                                                    E-mail
                                                </th>
                                                <th>
                                                    <?php echo $psr[8] ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Contact No
                                                </th>
                                                <th>
                                                    <?php echo $psr[7] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: gray">
                                                    Consulting Doctor
                                                </th>
                                                <th>
                                                    <?php echo $psr[9] ?>
                                                </th>
                                            </tr>
                                            
                                            
                                        </table>  
                                    </form>
                                    
                                </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
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
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/staff2.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			<div class="blog-grid-header">
		    				<h3>Duis aute irure dolor in reprehenderit</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/box-img2.jpg">
				</div>
				<div class="grid span_2_of_3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="button"><span><a href="#">Read More</a></span></div>
			   </div>
		   </div>
		   
		    		</div><br />
		    		<div class="clear"> </div>
		    		<div class="pagnation">
		    			<ul>
		    				<li><a href="#">1</a></li>
		    				<li><a href="#">2</a></li>
		    				<li><a href="#">3</a>&nbsp; ....</li>
		    				<li><a href="#">Next</a></li>
		    			</ul>
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

