<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];
$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
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
		<title>medicare Website Template | contact :: W3layouts</title>
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
					<a href=""><span style="color: steelblue;font-size: 60px;"><?php echo $fc[1] ?></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="hospital.php" style="text-decoration: none;">Home</a></li>
                                            
                                            <li><a href="add_dep.php" style="text-decoration: none;">Departments</a></li>
                                            <li><a href="adddoc.php"style="text-decoration: none;">Add_Doctors</a></li>    
                                            <li><a href="staffreg.php" style="text-decoration: none;">Staff_Registration</a></li>
                                               <li><a href="icu.php"style="text-decoration: none;">Manage_ICU</a></li>
                                                <li><a href="faci.php"style="text-decoration: none;">Facilities</a></li>
                                                <li><a href="gallery.php"style="text-decoration: none;">Add Gallery</a></li>
                                                <li><a href="logout.php"style="text-decoration: none;">Sign out</a></li>
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
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2></h2>
                                        <form method="post">
                                            <br><br><br><br>
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue;font-size: 20px">
                                                        Feedback
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                                        Username
                                                    </th>
                                                    <th style="color: gray">
                                                        Feedback
                                                    </th>
                                                    
                                                </tr> 
                                                <?php
                                                $fd=  mysql_query("select * from feedback where hid='$hid' and status='1'");
                                                if(mysql_num_rows($fd)>0)
                                                {
                                                   while($fdr=mysql_fetch_row($fd))
                                                   {
                                                    ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $fdr[2] ?>
                                                    </th>
                                                    <th>
                                                        <?php echo $fdr[3] ?>
                                                    </th>
                                                </tr>
                                                   <?php
                                                   }
                                                }
                                                ?>
                                                
                                                
                                                
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue;font-size: 20px">
                                                        Complaints
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                                        Username
                                                    </th>
                                                    <th style="color: gray">
                                                        Complaints
                                                    </th>
                                                </tr>
                                                <?php
                                                $cd=  mysql_query("select * from feedback where hid='$hid' and status='0'");
                                                if(mysql_num_rows($cd)>0)
                                                {
                                                    while($cdr=mysql_fetch_row($cd))
                                                    {                                                    
                                                                                                  
                                                ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $cdr[2]?>
                                                    </th>
                                                    <th>
                                                        <?php echo $cdr[3] ?>
                                                    </th>
                                                </tr>
                                                
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

