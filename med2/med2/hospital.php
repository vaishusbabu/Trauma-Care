<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];
if(isset($_POST['about']))
{
    $abt=$_POST['abt'];
    $pho=$_FILES['pho']['name'];
    $ph=strrpos($pho,".");
    $pht=substr($pho,$ph);
    $rslt="$hid$pht";
    $inn=mysql_query("insert into about_us values('','$hid','$abt','$rslt')");
    move_uploaded_file($_FILES['pho']['tmp_name'],  getcwd()."//pic//$rslt");
    if($inn>0)
    {
        header("location:hospital.php?suc=1");
    }
 else {
        header("location:hospital.php?suc=2");
    }
}
$hg=  mysql_query("select * from hosreg where uid='$hid'");
if(mysql_num_rows($hg)>0)
{
    $hr=mysql_fetch_row($hg);
}

?>
<?php
if($_SESSION['hos'])
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
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                                    <a href="hospital.php" style="text-decoration: none"><span style="color: #3285d1;font-size: 22px"><b>WELCOME</b></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
                                <div class="top-nav" style="font-size: 12px">
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
			<div class="blog">
		    		<div class="blog-grid">
                                    <h4 style="font-size: 45px"><?php echo $hr[1] ?></h4>
		    			
		    			<div class="image group">
				<div class="grid images_3_of_1">
                                    <style>
                                        #lnk
                                        {
                                        text-decoration: none;
                                        font-size: 15px; 
                                        width: 100%; 
                                        border: 1px solid white;
                                        box-shadow: 0px 0px 2px black;
                                        display: block;
                                        padding: 5px;
                                        margin-bottom: 2px;
                                        }
                                    </style>
                                        <?php
                                    $sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    $hr=  mysql_fetch_row($sel);
                                    ?>
                                    <img src="pic/<?php echo $hr[13] ?>"><br />
                                    <a href="search.php" id="lnk">Search Blood Doner</a>
                                   
                                    <a href="password.php" id="lnk">Change Password</a>
                                    <a href="viewfdbk.php" id="lnk"> Feedback</a>
                                    <a href="hosupdate.php" id="lnk">Update profile</a>
				</div>
				<div class="grid span_2_of_3">
                                    <form method="post"enctype="multipart/form-data">
                                        <?php
                                        $ab=  mysql_query("select * from about_us where hid='$hid'");
                                        if(mysql_num_rows($ab)>0)
                                        {
                                        $ar=  mysql_fetch_row($ab);
                                        ?>
                                        
                                        
                                        <p style="text-align: justify;font-size: 15px;text-indent: 10px"><?php echo $ar[2];?></p>
                                        <?php
                                        }
                                        else {
                                        
                                        
                                        
                                        ?>
                                    <table class="table table-bordered table-responsive">
                                        <tr>
                                            <th>
                                                ABOUT US
                                            </th>
                                            <th>
                                                <textarea name="abt" class="form-control"></textarea>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                UPLOAD PHOTO
                                            </th>
                                            <th>
                                                <input type="file" name="pho"class="form-control">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">
                                                <input type="submit"name="about"value="PROCEED" class="btn btn-sm btn-primary">
                                            </th>
                                        </tr>
                                    </table>
                                        
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        
                                        if(isset($_GET['suc']))
                                        {
                                            if($_GET['suc']=="1")
                                            {
                                                echo "Data saved successfully";
                                            }
                                            if($_GET['suc']=="2")
                                            {
                                                echo "Error found!try again";
                                            }
                                        }
                                        
                                        
                                        ?>
                                    </form>
					
			   </div>
		   </div>
		   
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

