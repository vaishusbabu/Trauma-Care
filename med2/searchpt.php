<?php
include("connect.php");
if(isset($_POST['sub']))
{
    $pt=$_POST['pt'];
    $pr=  mysql_query("select * from ptreg where comid='$pt'");
    if(mysql_num_rows($pr)>0)
    {
       $ptr=mysql_fetch_row($pr);
       $pid=$ptr[10];
       
    header("location:patdetail.php?p=$pid");
    }
 else {
        header("location:searchpt.php?er=2");    
    }
}

?>
<?php
session_start();
if($_SESSION['adm'])
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
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="admin.php"style="text-decoration: none">Home</a></li>
						<li><a href="addhos.php"style="text-decoration: none">Add Hospital</a></li>
						<li class=""><a href="manage.php"style="text-decoration: none">MANAGE_HOSPITALS</a></li>
						<li><a href="searchpt.php"style="text-decoration: none">SEARCH_PATIENT</a></li>
                                                <li><a href="approve.php"style="text-decoration: none">Approved_Hospitals</a></li>
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
		    				<h3>Last Visited:</h3>
		    				<ul>
		    					<li><img src="images/cal.png" alt=""><a href="#">February 21, 2013</a></li>
		    					<li><img src="images/admin.png" alt=""><a href="#">Admin</a></li>
		    					<li><img src="images/post-in.png" alt=""><a href="#">10</a></li>
		    				</ul>
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/box-img1.jpg">
				</div>
				<div class="grid span_2_of_3">
                                    <form method="post">
                                        <table class=" table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Enter patient Id
                                                </th>
                                                <th>
                                                    <input type="text" name="pt" class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit" name="sub" class="btn btn-sm btn-primary" value="search">
                                                </th>
                                            </tr>
                                            
                                        </table> 
                                        <?php
                                        if(isset($_GET['er']))
                                        {
                                            $err=$_GET['er'];
                                            if($err=="2")
                                            {
                                                echo "Invalid Id Try again";
                                            }
                                        }
                                        
                                        ?>
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

