<?php
include("connect.php");
if(isset($_GET['hr']))
{
    $hd=$_GET['hr'];
    $n=mysql_query("select * from hosreg where uid='$hd'");
    if(mysql_num_rows($n)>0)
    {
        $nr=mysql_fetch_row($n);
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
                                    <a href="searchhos.php" style="font-size: 35px;text-decoration: none" >HOSPITALS</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav"style="font-size: 12px;">
					<ul>
                                            <li><a href="admin.php"style="text-decoration: none;">Home</a></li>
						<li><a href="addhos.php"style="text-decoration: none;">Add Hospital</a></li>
						<li class=""><a href="manage.php"style="text-decoration: none;">MANAGE_HOSPITALS</a></li>
						<li><a href="searchpt.php"style="text-decoration: none;">SEARCH_PATIENT</a></li>
                                                <li><a href="approve.php"style="text-decoration: none;">Approved_Hospitals</a></li>
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
		    			<h4> <?php echo $nr[1] ?></h4>
		    			<div class="blog-grid-header">
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
                                    <img src="pic/<?php echo $nr[13] ?>">
				</div>
				<div class="grid span_2_of_3">
					<form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                    DETAILS
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    NAME
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[1] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    ADDRESS
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[2] ?>
                                                </th>
                                            </tr>
                                            
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    CONTACT NO
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[6] ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 15px">
                                                    E-MAIL
                                                </th>
                                                
                                                <th>
                                                    <?php echo $nr[5] ?>
                                                </th>
                                            </tr>
                                        </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        ABOUT US
                                                    </th>
                                                </tr>
                                                <?php
                                                $na=mysql_query("select * from about_us where hid='$hd'order by id desc");
                                                if(mysql_num_rows($na)>0)
                                                {
                                                  $nrn=mysql_fetch_row($na);
                                                  ?>
                                                  <tr>
                                                    <th>
                                                        <?php echo $nrn[2] ?>
                                                    </th>
                                                </tr>
                                                <?php
                                                }
                                                
                                                
                                                ?>
                                                
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        DEPARTMENTS
                                                    </th>
                                                </tr>
                                                <?php
                                                
                                                $nd=mysql_query("select * from add_dep where hosid='$hd'");
                                                    if(mysql_num_rows($nd)>0)
                                                             {
                                                              while($nrd=mysql_fetch_row($nd))
                                                              {
                                                
                                                ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $nrd[2] ?>
                                                    </th>
                                                </tr>
                                                <?php
                                                              }
                                                             }
                                                             ?>
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="3" style="color: steelblue; font-size: 20px ">
                                                        DOCTORS
                                                    </th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th style="color: steelblue; font-size: 15px ">
                                                        NAME                                                    </th>
                                                    <th style="color: steelblue; font-size: 15px ">
                                                        DEPARTMENT
                                                    </th>
                                                    <th>
                                                        
                                                    </th>
                                                </tr>
                                                <?php
                                                $ndo=mysql_query("select * from add_doc where hid='$hd'");
                                                    if(mysql_num_rows($ndo)>0)
                                                    {
                                                     
                                                    while($ndc=mysql_fetch_row($ndo))
                                                    {
                                                
                                                ?>
                                                <tr>
                                                    <th>
                                                        <?php echo $ndc[3] ?>
                                                    </th>
                                                    <th>
                                                        <?php echo $ndc[2] ?>
                                                    </th>
                                                    <th>
                                                        <img src="pic/<?php echo $ndc[18] ?>"style="width:100px;height: 100px">
                                                    </th>
                                                </tr>
                                                
                                                <?php
                                                    }
                                                    }
                                                    ?>
                                            </table>
                                            
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue; font-size: 20px ">
                                                        FACILITIES
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: steelblue;font-size: 15px">
                                                        Blood Bank
                                                    </th>
                                                    <th>
                                                        
                                                        <?php
                                                        $nb=mysql_query("select * from blood where hid='$hd'");
                                                        if(mysql_num_rows($nb)>0)
                                                        {
                                                            $nbl=mysql_fetch_row($nb);
                                                            echo $nbl[2];
                                                        }

                                                         ?>
                                                    </th>
                                                </tr>
                                                
                                                <tr>
                                                    <th style="color: steelblue;font-size: 15px">
                                                        Ventilator
                                                    </th>
                                                    <th>
                                                    <?php
                                                    $nv=mysql_query("select * from ventilator where hid='$hd'");
                                                    if(mysql_num_rows($nv)>0)
                                                     {
                                                          $nbv=mysql_fetch_row($nv);
                                                          ?>
                                                          
                                                        <?php echo $nbv[2] ?>
                                                   
                                                    <?php
                                                         }
                                                    
                                                    
                                                    ?>
                                                    </th> 
                                                </tr>
                                            </table>
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

