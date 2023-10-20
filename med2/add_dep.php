<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];

$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }
if(isset($_POST['dsub']))
{
    $dnm=$_POST['dnm'];
    $ddr=$_POST['ddr'];
    
    
    $dsr=  mysql_query("insert into add_dep values('','$hid','$dnm','$ddr')");
    if($dsr>0)
    {
        header("location:add_dep.php?su=1");
    }
    else
    {
        header("location:add_dep.php?su=2");
    }
    
    
}



if(isset($_GET['del']))
{
    $delt=$_GET['del'];
    $de=  mysql_query("delete from add_dep where hosid='$hid' and dept='$delt'");
    if($de>0)
    {
        header("location:add_dep.php?ds=1");
    }
 else {
        header("location:add_dep.php?ds=2");    
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
                            <h4 style="margin-left: 30px">ADD_DEPARTMENT</h4>
                                <br><br>
		   <div class="content-box">
		   <div class="section group">
                       <div class="col-lg-6" style="margin-left: 40px">
                                    <form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th>
                                                    <label style="color: gray"> NAME</label>
                                                </th>
                                                <th>
                                                    <input type="text"name="dnm"class="form-control">
                                                </th>
                                                
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th>
                                                    <label style="color: gray"> DESCRIPTION</label>
                                                </th>
                                                <th>
                                                    <textarea name="ddr" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                             
                                            
                                            
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="dsub"value="ADD" class="btn btn-sm btn-primary">
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
                                                
                                       
                                    </form>
                                     <form method="post">
                                         <?php
                                         if(isset($_POST['updt']))
                                         {
//                                             $dt=$_POST['dt'];
                                             if(isset($_GET['ed']))
                                             {
                                                 $edtt=$_GET['ed'];
                                             }
                                             $des=$_POST['des'];
                                             
                                             $upd=  mysql_query("update add_dep set des='$des' where hosid='$hid'and dept='$edtt'");
                                             if($upd>0)
                                             {
//                                                 header("location:add_dep.php?us=1");
                                                 echo "updated successfully";
                                                 
                                             }
                                             else
                                             {
//                                               header("location:add_dep.php?us=2");  
                                             }
                                         }
                                         
                                         
                                         
                                         
                                         ?>
                                    <?php
                                    if(isset($_GET['ed']))
                                    {
                                        $edt=$_GET['ed'];
                                        $eed=  mysql_query("select * from add_dep where hosid='$hid' and dept='$edt'");
                                        if(mysql_num_rows($eed)>0)
                                        {
                                            $erd=  mysql_fetch_row($eed);
                                        }
                                        ?>
                                         
                                         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="add_dep.php" style="text-align: right">BACK</a>
                                         <br><br>
                                         <table class="table table-bordered table-responsive">
                                             <tr>
                                                 <th>
                                                     <label style="color: gray">  DEPARTMENT</label>
                                                 </th>
                                                 <th>
                                                     <label style="color: gray"> DESCRIPTION</label>
                                                 </th>
                                             </tr>
                                             <tr>
                                                 <th>
                                                     <input type="text" name="dt" value="<?php echo $erd[2] ?>"readonly="">
                                                 </th>
                                                 <th>
                                                     <textarea name="des" value="">  <?php echo $erd[3] ?></textarea>                                               </th>
                                             </tr>
                                             <tr>
                                                 <th colspan="2">
                                                     <input type="submit" name="updt" value="UPDATE" class="btn btn-sm btn-primary">
                                                 </th>
                                             </tr>
                                         </table>
                                         <?php
                                         if(isset($_GET['us']))
                                         {
                                             if($_GET['su']=="1")
                                             {
                                                 echo "Data updated successfully ";
                                             }
                                             if($_GET['su']=="2")
                                             {
                                                 echo "Error found!Try again";
                                             }
                                         }
                                         
                                         ?>
                                         
                                    <?php
                                    }
                                    
                                    
                                    
                                         
                                         else
                                            {
                                             ?>
                                         <br>
                                    <h4>Available Departments</h4>
                                    <br>
                                   
                                    <table class="table table-bordered table-responsive">
                                        <tr>
                                            <th>
                                                <label style="color: gray"> NAME</label>
                                            </th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <?php
                                        $ad=  mysql_query("select * from add_dep where hosid='$hid' order by id desc");
                                        if(mysql_num_rows($ad)>0)
                                        {
                                            while ($adr=mysql_fetch_row($ad))
                                            {
                                        ?>
                                        <tr>
                                            <th style="color: grey" >
                                                <?php echo $adr[2]?>
                                            </th>
                                            <th>
                                                <a href="add_dep.php?ed=<?php echo $adr[2] ?>" class="btn bg-infoqqqqq">EDIT</a>
                                            </th>
                                            <th>
                                                <a href="add_dep.php?del=<?php echo $adr[2] ?>" style="text-decoration: none;display: block;width: 65px;background-color: lightgray;border-radius: 5px;padding: 5px;">DELETE</a>
                                            </th>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
                                        
                                        
                                    </table>
                                        <?php
                                        }
                                        if(isset($_GET['ds']))
                                        {
                                            if($_GET['ds']=="1")
                                            {
                                                echo "Data deleted successfully";
                                            }
                                            if($_GET['ds']=="2")
                                            {
                                                echo "Error found!Try again";
                                            }
                                        }
                                        ?>
                                    </form>
				</div>
				
                       <div class="col_1_of_3 span_1_of_3 frist" style="margin-left: 80px">
					<h3>Enjoy the glow of good health</h3>
                                        <img src="pic/home2.jpg" title="" />
                                        <span><p style="text-align: justify;text-indent: 10px;font-size: 15px;color: steelblue">To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first discipline and control one's own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.</p>
</span> <br /><br />
                                        <img src="pic/hm8.jpg" title="" />
                                        <span><p style="text-align: justify;text-indent: 10px;font-size: 15px;color: steelblue">Time and health are two precious assets that we don't recognize and appreciate until they have been depleted.
</p></span>
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

