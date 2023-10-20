<?php
include("connect.php");
 if(isset($_GET['app']))     
    {
    $apr=$_GET['app'];
    $up=  mysql_query("update hosreg set status='1' where uid='$apr'");
    if($up>0)
    {
        $up1=mysql_query("update user_login SET status='1' where uid='$apr'");
        if($up1>0)
        {
            header("location:manage.php");
        }
    }
    }
    
    if(isset($_GET['rej']))     
    {
    $rej=$_GET['rej'];
    $upp=  mysql_query("delete from hosreg  where uid='$rej'");
    if($upp>0)
    {
        $up1=mysql_query("delete from user_login  where uid='$rej'");
        if($up1>0)
        {
            header("location:manage.php");
        }
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
                                            <li><a href="admin.php" style="text-decoration: none">Home</a></li>
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
					<div class="contact_info">
			    	 	<h2>Manage Hospital</h2><br />
                                        <div class="map">
                                            <img src="pic/logo.png" class="img img-responsive" />
                                        </div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="">
                                      <?php
                                      if(isset($_GET['view']))
                                      {
                                          $v=$_GET['view'];
                                          ?>
                                      <form method="post"><br />
                                          <a href="manage.php" class="label label-danger pull-right">BACK</a>
                                           
                                      <?php
                                      $sl=mysql_query("select * from hosreg where uid='$v'");
                                      if($sl>0)
                                      {
                                          while($rr=mysql_fetch_row($sl))
                                          {
                                            ?>
                                          <div class="thumbnail" style="text-align: center">
                                            
                                                  <img src="pic/<?php echo $rr[13] ?>" style="width: 100px;height: 100px" class="img img-responsive">
                                             <?php echo "<b>Hospital:   $rr[1]</b><br>"?>
                                               <?php echo "<b>Address:   $rr[2]</b><br>"?>
                                                   <?php echo "<b>Pincode:   $rr[3]</b><br>"?>
                                                   <?php echo "<b>District:   $rr[4]</b><br>"?>
                                                   <?php echo "<b>Email:   $rr[5]</b><br>"?>
                                                   <?php echo "<b>Phone no:   $rr[6]</b><br>"?>
                                              
                                          
                                          </div>       
                                        
                                                           
                                      <?php
                                      
                                          }
                                      }
                                      }    
                                    else 
                                        {
                                      ?>
                                                    <br>
				  	<h2>REGISTERED_HOSPITALS </h2>
                                        <br>
                                       
                                            <table class="table table-bordered table-responsive table-condensed table-hover table-striped">
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        NAME
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        ADDRESS
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        CONTACT NO
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        E-MAIL
                                                    </th>
                                                    <th colspan="3" align="center">
                                                    
                                                        More
                                                    </th>
                                                   
                                                </tr>
                                                <?php
                                                $sl=mysql_query("select * from hosreg where status='0'");
                                                if($sl>0)
                                                {
                                                    while ($r=mysql_fetch_row($sl))
                                                    {
                                                    ?>    
                                               
                                                        <tr>
                                                            <th>
                                                                <?php echo $r[0] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[1] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[2] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[6] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[7] ?>
                                                            </th>
                                                            <th>
                                                                <a href="manage.php?view=<?php echo $r[8] ?>"><img src="sy/vi.jpg" width="20px" height="20px" title="view more"></a>
                                                         
                                                                
                                                                <a href="manage.php?app=<?php echo $r[8] ?>"><img src="sy/l.png" width="20px" height="20px" title="Approve"></a>
                                                           
                                                          
                                                                <a href="manage.php?rej=<?php echo $r[8] ?>"><img src="sy/u.jpg" width="20px" height="20px" title="DEny"></a>
                                                            </th>
                                                        </tr>
                                                <?php
                                                    }
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

