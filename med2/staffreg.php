<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];
$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }
if(isset($_POST['ssub']))
{
    $dp="All";
    $snm=$_POST['snm'];
    $sdt=$_POST['sdt'];
    $gnd=$_POST['gnd'];
    $sadd=$_POST['sadd'];
     $smob=$_POST['smob'];
      $sem=$_POST['sem'];
       $suid=$_POST['suid'];
       $spid=$_POST['spid'];
       $sph=$_FILES['sph']['name'];
       $psr=strrpos($sph,".");
       $sbr=  substr($sph,$psr);
       $sext="$suid$sbr";
       $sin=mysql_query("insert into staff_reg values('','$hid','$dp','$snm','$sdt','$gnd','$sadd','$smob','$sem','$suid','$spid','$sext')");
      $logn=mysql_query("insert into user_login values('','$suid','$spid','staff','1')" );
       move_uploaded_file($_FILES['sph']['tmp_name'],getcwd()."//staff_pic//$sext");
       if($sin>0)
       {
           header("location:staffreg.php?ssuc=1");
       }
 else {
        header("location:staffreg.php?ssuc=2");   
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
                            <div class="col span_1_of_3"><br />
                                <center>
                                 <?php
                                    $sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    $hr=  mysql_fetch_row($sel);
                                    ?>
                                    <img src="pic/<?php echo $hr[13] ?>">
                                    <h2 style="color: gray">REGISTER_STAFF</h2>
                                    </center>
                            </div>				
				<div class="col span_2_of_3">
                                    <br>
                                    
                                  <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <table class="table table-bordered table-responsive">
                                            <tr>
                                    <th style="color: gray">
                                    NAME
                                    </th>
                                                       
                                    <th>
                                <input type="text" name="snm" class="form-control"value="">
                                    </th>
                                </tr>
                                <tr>
                                    <th style="color: gray">
						    	DOB
                                    </th>
                                    <th>
                                                        <input type="date" name="sdt" class="form-control"value="">
                                    </th>
                                </tr>
                                <tr>
                                    <th style="color: gray">
                                    GENDER
                                    </th>
                                    <th>
                                                        <input type="radio"name="gnd" value="male"/>male
                                                        <input type="radio"name="gnd" value="female"/>female
                                    </th>
                                </tr>
                                <tr>
                                    <th style="color: gray">
                                    ADDRESS
                                    </th>
                                    <th>
                                    
                                                        <textarea name="sadd"class="form-control" value=""></textarea>
                                    </th>
                                </tr>
                                <tr> 
                                    <th style="color: gray">
					MOBILE
                                    </th>
                                    <th>
                                                       <input type="text"name="smob"class="form-control" value="">
                                    </th>
                                </tr>
                        
                                <tr> 
                                    <th style="color: gray">
						    E-MAIL
                                    </th>
                                    <th>
                                                        <input type="email" name="sem"class="form-control" value="">
                                    </th>
                                </tr>
                                <tr>
                                    <th style="color: gray">
                                    USER_ID
                                    </th>
                                    <th>                 
                                <input type="text" name="suid"class="form-control" value="">
                                    </th>
                                </tr>
                                <tr>
                                    <th style="color: gray">
                                    PASSWORD
                                    </th>
                                    <th>
                                    <input type="password" name="spid"class="form-control" value="">
                                    </th>
                                </tr>
						    
                                <tr>
                                    <th style="color: gray">
                                UPLOAD PHOTO
                                    </th>
                                    <th>
                                     <input type="file" name="sph" class="form-control">
                                    </th>
                                </tr>
						  
                                <tr>
                                    <th colspan="2">
                                <input type="submit"name="ssub"class="btn btn-sm btn-primary" value="PROCEED">
                                    </th>
                                </tr>
                                            
                                 </table>
                                            <?php
                                            if(isset($_GET['ssuc']))
                                            {
                                                if($_GET['ssuc']=="1")
                                                {
                                                    echo "Data saved successfully";
                                                }
                                                if($_GET['ssuc']=="2")
                                                {
                                                    echo "Error found!try again";
                                                }
                                            }
                                            
                                            
                                            ?>
					    </form>
                                  <h3>Available Staff Details</h3>		
			  <?php
                          $sel_stf=mysql_query("select * from staff_reg where hosid='$hid'");
                          if(mysql_num_rows($sel_stf)>0)
                          {
                              ?>
                                  <table class="table table-bordered table-condensed table-responsive table-striped">
                                      <tr>
                                          <td>#</td>
                                          <td>Name</td>
                                          <td>Address</td>
                                          <td>Contact</td>
                                      </tr>
                                      <?php
                                      $i=0;
                                      while($rstf=mysql_fetch_row($sel_stf))
                                      {
                                          $i++;
                                          ?>
                                      <tr>
                                          <td><?php echo $i ?></td>
                                          <td><?php echo $rstf[3] ?></td>
                                          <td><?php echo $rstf[6] ?></td>
                                          <td><?php echo $rstf[7] ?></td>
                                      </tr>
                                      <?php
                                      }
                                      ?>
                                  </table>
                                  <?php
                          }
                          else
                          {
                              echo "No Staff Data Found";
                          }
                          ?>
			  	 
                                  
                                  
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

