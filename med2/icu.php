<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];

$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }
if(isset($_POST['isub']))
{
    $dnm=$_POST['dnm'];
    $inm=$_POST['inm'];
    $ibd=$_POST['ibd'];
    $idr=$_POST['idr'];
     
    
    $isr=  mysql_query("insert into add_icu values('','$hid','$dnm','$inm','$ibd','$idr','0','0')");
    if($isr>0)
    {
        header("location:icu.php?su=1");
    }
    else
    {
        header("location:icu.php?su=2");
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
		   	<div class="about">
                            <br>
		   		<h4>ICU_MANAGEMENT</h4>
                                <br><br>
		   <div class="content-box">
		   <div class="section group">
				<div class="col-lg-6">
                                    <form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                    DEPARTMENT
                                                </th>
                                                <th>
                                                    <select name="dnm"class="form-control">
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
                                                        ?>
                                                    </select>
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                     NAME
                                                </th>
                                                <th>
                                                    <input type="text"name="inm"class="form-control">
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                   NUMBER OF BEDS
                                                </th>
                                                <th>
                                                    <input type="text"name="ibd"class="form-control">
                                                </th>
                                                
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th style="color: gray;text-align: center">
                                                    DESCRIPTION
                                                </th>
                                                <th>
                                                    <textarea name="idr" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                             
                                            
                                            
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="isub"value="ADD" class="btn btn-sm btn-primary">
                                                </th>
                                                
                                            </tr>
                                             </table>
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
                                                
                                        <h3>Available Status</h3>
                                        <?php
                                        $sel_icu=mysql_query("select * from add_icu where hosid='$hid'");
                                        if(mysql_num_rows($sel_icu)>0)
                                        {
                                            ?>
                                        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                            <tr>
                                                <td>#</td>
                                                <td>ICU Name</td>
                                                <td>Available Bed</td>
                                            </tr>
                                            <?php
                                            $i=0;
                                            while($ricu=mysql_fetch_row($sel_icu))
                                            {
                                                $i++;
                                                ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $ricu[3] ?></td>
                                                <td><?php echo $ricu[4] ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                        <?php
                                        }
                                        else
                                        {
                                            echo"No Information Available";
                                        }
                                        ?>
                                    </form>
				</div>
				
                       <div class="col_1_of_3 span_1_of_3 frist" style="margin-left: 80px">
					<h3>Enjoy your health</h3>
                                        <img src="pic/icu2.jpg" title=""style="height: 200px" />
                                        <span><p style="font-size: 15px;color: steelblue">Good health is not something we can buy. However, it can be an extremely valuable savings account.</p>
</span> <br /><br />
                                        <img src="pic/icu3.jpg" title="staff" />
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

