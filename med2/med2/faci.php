<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];

$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }
if(isset($_POST['bsub']))
{
    $brd=$_POST['brd'];
     
    
    $isr=  mysql_query("insert into blood values('','$hid','$brd')");
    if($isr>0)
    {
        header("location:faci.php?su=1");
    }
    else
    {
        header("location:faci.php?su=2");
    }
    
    
}

if(isset($_POST['vsub']))
{
    $vtr=$_POST['vtr'];
     
    
    $vsr=  mysql_query("insert into ventilator values('','$hid','$vtr')");
    if($vsr>0)
    {
        header("location:faci.php?su=1");
    }
    else
    {
        header("location:faci.php?su=2");
    }
    
    
}

if(isset($_POST['osub']))
{
    $osld=$_POST['osld'];
    $onm=$_POST['onm'];
     
    
    $isr=  mysql_query("insert into optr values('','$hid','$osld','$onm','0','0')");
    echo mysql_error();
    if($isr>0)
    {
        header("location:faci.php?su=1");
    }
    else
    {
        //header("location:faci.php?su=2");
    }
    
    
}

if(isset($_POST['asub']))
{
    $amb=$_POST['amb'];
     
    
    $asr=  mysql_query("insert into ambulance values('','$hid','$amb')");
    if($asr>0)
    {
        header("location:faci.php?su=1");
    }
    else
    {
        header("location:faci.php?su=2");
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
		<title>medicare Website Template | About :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
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
				<div class="top-nav" style="font-size: 12px">
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
		   	<div class="about">
                            <br>
		   		<h4>ADD_FACILITIES</h4>
                                <br><br>
		   <div class="content-box">
		   <div class="section group">
				<div class="col-lg-6">
                                    <form method="post">
                                        
                                        <span style="color: steelblue;font-size: 20px">Blood bank facility</span> 
                                        <?php
                                        $sel_bld=mysql_query("select * from blood where hid='$hid'");
                                        if(mysql_num_rows($sel_bld)>0)
                                        {
                                            $rbld=mysql_fetch_row($sel_bld);
                                            ?>
                                        <div class="alert alert-danger">
                                            Blood Bank Availability: <b><?php echo $rbld[2] ?></b>
                                        </div>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <table class="table table-bordered table-responsive">
                                            
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                     Is Blood Bank Facility Available
                                                </th>
                                                <th>
                                                    <input type="radio"name="brd"value="Yes"/>Yes
                                                    <input type="radio"name="brd"value="No"/>No
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="bsub"value="SUBMIT" class="btn btn-sm btn-primary">
                                                </th>
                                                
                                            </tr>
                                             </table>
                                        <?php
                                        }
                                        ?>
                                        <span style="color: steelblue;font-size: 20px">Ventilator facility</span> 
                                        <?php
                                        $sel_v=mysql_query("select * from ventilator where hid='$hid'");
                                        if(mysql_num_rows($sel_v)>0)
                                        {
                                            $rv=mysql_fetch_row($sel_v);
                                            ?>
                                        <div class="alert alert-warning">
                                            Ventilator : <b><?php echo $rv[2] ?></b>
                                        </div>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <table class="table table-bordered table-responsive">
                                            
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                     Is Ventilator Facility Available
                                                </th>
                                                <th>
                                                    <input type="radio"name="vtr"value="Yes"/>Yes
                                                    <input type="radio"name="vtr"value="No"/>No
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="vsub"value="SUBMIT" class="btn btn-sm btn-primary">
                                                </th>
                                                
                                            </tr>
                                             </table>
                                        <?php
                                        }
                                        ?>                                        
                                        <br>
                                        <span style="color: steelblue;font-size: 20px">Ambulance Facility</span> 
                                        <?php
                                        $sel_am=mysql_query("select * from ambulance where hid='$hid'");
                                        if(mysql_num_rows($sel_am)>0)
                                        {
                                            $ram=mysql_fetch_row($sel_am);
                                            ?>
                                        <div class="alert alert-success">
                                            Total No of Ambulance : <?php echo $ram[2] ?>
                                        </div>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                    Total Number of Ambulances
                                                </th>
                                                <th>
                                                    <input type="text"name="amb"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="asub"value="SUBMIT" class="btn btn-sm btn-primary">
                                                </th>
                                            </tr>
                                        </table>
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <span style="color: steelblue;font-size: 20px">Operation Theature</span> 
                                        
                                        
                                        <table class="table table-bordered table-responsive">
                                            
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                    Department
                                                </th>
                                                <th>
                                                    <select name="osld" class="form-control">
                                                        
                                                        
                                                        <option value="">----Choose one----</option>
                                                        <?php
                                                        $is=  mysql_query("select * from add_dep where hosid='$hid'");
                                                        if(mysql_num_rows($is)>0)
                                                        {
                                                            
                                                            while ($id=mysql_fetch_row($is))
                                                            {
                                                        
                                                        
                                                        ?>
                                                        <option value="<?php echo $id[2] ?> "><?php echo $id[2] ?></option>
                                                   <?php
                                                            }
                                                        }
                                                        ?>                                                    </select>
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                    Name
                                                </th>
                                                <th>
                                                    <input type="text"name="onm" class="form-control">
                                                </th>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="osub"value="SUBMIT" class="btn btn-sm btn-primary">
                                                </th>
                                                
                                            </tr>
                                             </table>
                                        <?php
                                        $sel_op=mysql_query("select * from optr where hid='$hid'");
                                        if(mysql_num_rows($sel_op)>0)
                                        {
                                            ?>
                                        <table class="table table-bordered table-condensed table-hover">
                                            <tr>
                                                <td>#</td>
                                                <td>OT Name</td>
                                                <td>Status</td>
                                            </tr>
                                            <?php
                                            $i=0;
                                            while($rot=mysql_fetch_row($sel_op))
                                            {
                                                $i++;
                                                ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $rot[3] ?></td>
                                                <td></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>                                        
                                        <?php
                                        }
                                        else
                                        {
                                            echo"No data Avaiable";
                                        }
                                        ?>
                                            <?php                                        
                                            if(isset($_GET['su']))
                                            {
                                                if($_GET['su']=="1")
                                                {
                                                    echo "Data saved successfully";
                                                }
                                                if($_GET['su']=="2")
                                                {
                                                    echo "Error found!try again";
                                                }
                                            }
                                        ?>
                                                
                                       
                                    </form>
				</div>
				
                       <div class="col_1_of_3 span_1_of_3 frist" style="margin-left: 100px">
					<h3>Our Staff</h3>
                                        <img src="pic/hm1.jpg" title="staff" />
					<span><p style="font-size: 15px;color: steelblue">Good health is not something we can buy. However, it can be an extremely valuable savings account.</p>
</span> <br /><br />
                                        <img src="pic/hm4.jpg" title="staff" />
					<span><p style="font-size: 15px;color: steelblue">Calm mind brings inner strength and self-confidence, so that's very important for good health.</p>
</span>
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

