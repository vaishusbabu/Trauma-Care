<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];
$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }
if(isset($_POST['doc']))
{
     $dsl=$_POST['dsl'];
    $name=$_POST['name'];
    $gnd=$_POST['gnd'];
    $dte=$_POST['dte'];
    $addrs=$_POST['addrs'];
    $pin=$_POST['pin'];
    $cn=$_POST['cn'];
    $eml=$_POST['eml'];
    $pc=$_POST['pc'];
    $dg=$_POST['dg'];
    $inst=$_POST['inst'];
    $yrs=$_POST['yrs'];
    $pg=$_POST['pg'];
    $insti=$_POST['insti'];
    $user="nil";
    $psw="nil";
    $pho=$_FILES['pho']['name'];
    
    $dpos=strrpos($pho,".");
    $dsub=substr($pho,$dpos);
    $dex="$name$dsub";
    
    $isr=  mysql_query("insert into add_doc values('','$hid','$dsl','$name','$gnd','$dte','$addrs','$pin','$cn','$eml','$pc','$dg','$inst','$yrs','$pg','$insti','$user','$psw','$dex','0')");
    move_uploaded_file($_FILES['pho']['tmp_name'], getcwd()."//pic//$dex");
    if($isr>0)
    {
        header("location:adddoc.php?su=1");
    }
    else
    {
        header("location:adddoc.php?su=2");
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
                            <h4 style="color: gray">ADD_DOCTORS</h4>
                                <br><br>
		   <div class="content-box">
		   <div class="section group">
				<div class="col-lg-6">
                                    <form method="post" enctype="multipart/form-data">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: gray">
                                                    DEPARTMENT
                                                </th>
                                                <th>
                                                    <span><select name="dsl" class="form-control">
                                                                        <option value="">----Choose one----</option>
                                                                        <?php
                                                        $is=  mysql_query("select * from add_dep where hosid='$hid'");
                                                        if(mysql_num_rows($is)>0)
                                                        {
                                                            
                                                            while ($id=mysql_fetch_row($is))
                                                            {
                                                        
                                                        
                                                        ?>
                                                                        <option value="<?php echo $id[2] ?> "><?php echo $id[2] ?> </option>
                                                                        
                                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                            </select></span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    FULL NAME
                                                </th>
                                                <th>
                                                    <input type="text"name="name"class="form-control">
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    GENDER
                                                </th>
                                                <th>
                                                    <input type="radio"name="gnd"value="male"/>male
                                                    <input type="radio"name="gnd"value="female"/>female
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    DOB
                                                </th>
                                                <th>
                                                    <input type="date"name="dte" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    ADDRESS
                                                </th>
                                                <th>
                                                    <textarea name="addrs" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    PIN
                                                </th>
                                                <th>
                                                    <input type="text"name="pin" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    CONTACT NO
                                                </th>
                                                <th>
                                                    <input type="text"name="cn"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    E-MAIL
                                                </th>
                                                <th>
                                                    <input type="text"name="eml"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    No. of years in practice
                                                </th>
                                                <th>
                                                    <input type="text"name="pc"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Name of degree
                                                </th>
                                                <th>
                                                    <input type="text"name="dg"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Name of institution
                                                </th>
                                                <th>
                                                    <input type="text"name="inst"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Year
                                                </th>
                                                <th>
                                                    <input type="text"name="yrs"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Additional Post graduate qualification
                                                </th>
                                                <th>
                                                    <input type="text"name="pg"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: gray">
                                                    Institution
                                                </th>
                                                <th>
                                                    <input type="text"name="insti"class="form-control">
                                                </th>
                                            </tr>                                            
                                            <tr>
                                                <th style="color: gray">
                                                    Upload Photo
                                                </th>
                                                <th>
                                                    <input type="file"name="pho"class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="doc"value="ADD" class="btn btn-sm btn-primary">
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
				</div>
				
                       
                      
                       <div class="col_1_of_3 span_1_of_3 frist" style="margin-left: 90px">
					<h3>Our Doctors</h3>
                                         <?php
                       $doc=  mysql_query("select * from add_doc where hid='$hid'");
                       if(mysql_num_rows($doc)>0)
                       {
                           while($dr=mysql_fetch_row($doc))
                           {
                       
                       
                       
                       ?>
                                        <div class="col-lg-5">
                                        <img src="pic/<?php echo $dr[18] ?>"style="width: 100px;height: 100px" title="doctors" />
					<span><?php echo $dr[3] ?></span> &nbsp <span><?php echo $dr[2] ?></span><br /><br />
                                        </div>
                                        <?php
                           }
                       }
                       ?>
<!--					<img src="images/staff2.jpg" title="staff" />
					<span>Ut enim ad minim veniam, quis nostrud exercitation ullamco voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
				-->
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

