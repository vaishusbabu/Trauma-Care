<?php
include("connect.php");




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
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			
				</div>				
				<div class="col-lg-12 ">
				  <div class="">
                                     
                                                
                                      
                                      <h2 style="color: grey">APPROVED_HOSPITALS </h2>
                                      <br>
                                           
                                                    
                                                                                                    
                                                </tr>
                                                <?php
                                                $sl=mysql_query("select * from hosreg where status='1'");
                                                if($sl>0)
                                                {
                                                    while ($r=mysql_fetch_row($sl))
                                                    {
                                                    ?>    
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="thumbnail" style="text-align: center;">
                                                        <img src="pic/<?php echo $r[13] ?>" style="width: 200px;height: 100px" class="img img-responsive img-circle">
                                                           
                                                     <?php echo  " <b>Name :</b>$r[1]<br>" ?>
                                                       <?php echo " <b>Address :</b>$r[2]<br>" ?>
                                                      <?php echo " <b>Pin :</b>$r[3] <br>"?>
                                                         <?php echo "<b>District :</b>$r[4]<br>" ?>
                                                        <?php echo " <b>Email :</b>$r[5]<br> "?>
                                                       <?php echo " <b>Land line :</b>$r[6]<br>" ?>
                                                     <?php echo "    <b> Mobile :</b>$r[7]<br>" ?>
                                                    
                                                    
                                                </div>
                                                </div>      
                                                                
                                                <?php
                                                    }
                                                }
                                    
                                                ?>
                                            
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

