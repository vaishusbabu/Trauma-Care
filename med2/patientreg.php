<?php
include("connect.php");
session_start();
$sid=$_SESSION['stf'];
$ssel=  mysql_query("select * from staff_reg where uid='$sid'");

if(mysql_num_rows($ssel)>0)
{
    $sr=mysql_fetch_row($ssel);
}
$shid=$sr[1];
$hn=mysql_query("select * from hosreg where uid='$shid'");
if(mysql_num_rows($hn)>0)
{
    $shr=mysql_fetch_row($hn);
}

if(isset($_GET['cid']))
{
$cid=$_GET['cid'];
}
else
{
    header("location:staffhome.php");
}
                                                   
if(isset($_POST['psub']))
{
   $pnm=$_POST['pnm'];
    $prd=$_POST['prd'];
     $pdt=$_POST['pdt'];
      $psl=$_POST['psl'];
       $pfnm=$_POST['pfnm'];
        $padr=$_POST['padr'];
         $pcn=$_POST['pcn'];
          $pem=$shid;
          $pdoc=$_POST['pdoc'];
          $pcid=$_POST['pcid'];
          
          $pins=  mysql_query("insert into ptreg values('','$pnm','$prd','$pdt','$psl','$pfnm','$padr','$pcn','$pem','$pdoc','$pcid')");
   if($pins>0)
   {
       $up=mysql_query("update image set status=5 where acc_id='".$_GET['aid']."' and hid='$shid'");
       header("location:patientreg.php?psuc=1");
   }
 else {
    header("location:patientreg.php?psuc=2");   
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
                                    <a href="staffhome.php"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[3] ?>&nbsp &nbsp<img src="staff_pic/<?php echo $sr[11] ?> "style="width: 70px;height: 70px"></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="staffhome.php"style="text-decoration: none">Home</a></li>
						<li><a href="patientreg.php"style="text-decoration: none">Patient_Registration</a></li>
						<li><a href="hinfo.php"style="text-decoration: none">Update_Information</a></li>
                                                <li class=""><a href="logout.php"style="text-decoration: none">Sign out</a></li>
						
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
		    			<h4><?php echo $shr[1] ?></h4>
                                        <div class="blog-grid-header">
                                            
                                        </div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
                                    <img src="pic/im1.jpg">
                                    <img src="pic/logo3.png">
				</div>
                                            
				<div class="grid span_2_of_3">
                                    
                                    <form method="post">
                                        
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: gray;text-align: left">
                                                    NAME
                                                </th>
                                                <th style="color: gray">
                                                    <input type="text"name="pnm"class="form-control">
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: gray;">
                                                    GENDER
                                                </th>
                                                <th>
                                                    <input type="radio"name="prd" value="male"/>Male
                                                    <input type="radio"name="prd" value="female"/>Female
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    DOB
                                                </th>
                                                <th>
                                                    <input type="date"name="pdt"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                   MARITAL STATUS
                                                </th>
                                                <th>
                                                    <select name="psl"class="form-control">
                                                        <option value="single">single</option>
                                                        <option value="single">married</option>
                                                        <option value="single">divorced</option>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    FATHER'S NAME
                                                </th>
                                                <th>
                                                    <input type="text"name="pfnm"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    ADDRESS
                                                </th>
                                                <th>
                                                    <textarea name="padr" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    CONTACT NO
                                                </th>
                                                <th>
                                                    <input type="text"name="pcn"class="form-control">
                                                </th>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th style="color: gray">
                                                    REGISTER UNDER DOCTOR
                                                </th>
                                                <th>
                                                    <select name="pdoc" class="form-control">
                                                        <option value="----Choose one----">
                                                            
                                                        </option>
                                                        <?php
                                                        $sdoc=  mysql_query("select * from add_doc where hid='$shid'");
                                                        if(mysql_num_rows($sdoc)>0)
                                                        {
                                                            while ($rdoc=  mysql_fetch_row($sdoc))
                                                            {
                                                                
                                                            
                                                        ?>
                                                        <option value="<?php echo $rdoc[1] ?>"><?php echo $rdoc[3] ?></option>
                                                        
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                       </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    COMMUNICATION ID
                                                </th>
                                                <th>                                                    
                                                    <input type="text"name="pcid"class="form-control" value="<?php echo $cid ?>">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="psub"value="PROCEED"class="btn btn-sm btn-primary">
                                                    
                                                </th>
                                            </tr>
                                        </table>
                                        <?php
                                        if(isset($_GET['psuc']))
                                        {
                                            if($_GET['psuc']=="1")
                                            {
                                                echo "Data saved successfully";
                                            }
                                            if($_GET['psuc']=="2")
                                            {
                                                echo "Error found! try again!";
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

