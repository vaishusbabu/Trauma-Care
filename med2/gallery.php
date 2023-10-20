<?php

include("connect.php");
session_start();
$hid=$_SESSION['hos'];

$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }

if(isset($_POST['sub']))
{
    
    $ct=$_POST['ct'];
    $tl=$_POST['tl'];
    $pic=$_FILES['pic']['name'];
    
    
    $pos=strrpos($pic,".");
    $spos=substr($pic,$pos);
    $gex="$tl$spos";
    $gin=  mysql_query("insert into gallery values ('','$hid','$ct','$tl','$gex')");
    move_uploaded_file($_FILES['pic']['tmp_name'],  getcwd()."//pic//gal//$gex");
   
      if($gin>0)
    {
        header("location:gallery.php?gs=1");
    }
 else {
    header("location:gallery.php?gs=2");    
    }
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
                                            <li><a href="hospital.php" style="text-decoration: none">Home</a></li>
                                            
                                            <li><a href="add_dep.php" style="text-decoration: none">Departments</a></li>
                                            <li><a href="adddoc.php"style="text-decoration: none">Add_Doctors</a></li>    
                                            <li><a href="staffreg.php" style="text-decoration: none">Staff_Registration</a></li>
                                                
                                                <li><a href="icu.php"style="text-decoration: none">Manage_ICU</a></li>
                                                <li><a href="faci.php"style="text-decoration: none">Facilities</a></li>
                                                <li><a href="gallery.php"style="text-decoration: none">Add Gallery</a></li>
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
                                <br />
                                <center>
                                 <?php
                                    $sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    $hr=  mysql_fetch_row($sel);
                                    ?>
                                    <img src="pic/<?php echo $hr[13] ?>">
                                    <h2 style="color: gray">MANAGE GALLERY</h2>
                                    </center>
                            
                            </div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
                                      <h2 style="color: gray">ADD GALLERY</h2>
                                        <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <table class="table table-bordered table-responsive">
                                                
                                                
                                                
                                                <tr>
                                                    <th style="color: gray" >
                                                        CATEGORY
                                                    </th>
                                                    <th>
                                                        <select name="ct" class="form-control">
                                                            <option value="">---Choose one---</option>
                                                            <?php
                                                            $ds=mysql_query("select * from add_dep where hosid='$hid'");
                                                            if(mysql_num_rows($ds)>0)
                                                            {
                                                                while ($drd=mysql_fetch_row($ds))
                                                                {
                                                                    
                                                                ?>
                                                            <option value="<?php echo $drd[2] ?>"><?php echo $drd[2] ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            
                                                            ?>
                                                            
                                                            
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                                        TITLE
                                                    </th>
                                                    <th>
                                                        <input type="text"name="tl"class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                                        UPLOAD PHOTO
                                                    </th>
                                                    <th>
                                                        <input type="file"name="pic"class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        <input type="submit" name="sub"value="SUBMIT">
                                                    </th>
                                                </tr>
                                            </table>	
						<?php
                                                
						  if(isset($_GET['gs']))
                                                  {
                                                      if($_GET['gs']=="1")
                                                      {
                                                          echo"Photo added successfully";
                                                      }
                                                      if($_GET['gs']=="2")
                                                      {
                                                          echo "Error found! Try again!";
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

