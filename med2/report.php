<?php
include("connect.php");
if(isset($_POST['sub']))
{
    $bc=$_POST['bc'];
    $pas=$_POST['pas'];
    $chk_user=mysql_query("select * from cit_data where bar_code='$bc' and password='$pas'");
    if(mysql_num_rows($chk_user)>0)
    {
        $expire=  time() + (86400 * 30);
        setcookie("bar", $bc, $expire);
        header("location:report.php?report=1");
    }
    else
    {
        header("location:report.php?error=1");
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
                                    <a href="index.html"><img src="images/slider-image1.jpg" title="logo" /></a>
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
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
<!--			    	 	<h2>Find Us Here</h2><br />-->
<br><br><br><br>
			    	 		<div class="map">
<!--					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		-->
                                                        <img src="pic/login1.jpg">
                                                </div>
      				</div>
<!--      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>-->
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
<!--				  	<h2>LOGIN</h2>-->
                                        <br><br><br><br>
                                        <form method="post">
                            <table class="table table-bordered table-striped table-hover table-responsive">
                            <tr>
                                <td>Enter Barcode ID</td>
                                <td><input type="text" name="bc" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Enter Password</td>
                                <td><input type="password" name="pas" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="sub" value="Find My REPORT" class="btn btn-success" /></center></td>
                            </tr>
                            </table>
                            <div id="hlist">
                                <?php
                                if(isset($_GET['error']))
                                {
                                    echo "Invalid User Credentials";
                                }
                                if(isset($_GET['report']))
                                {
                                    if(isset($_COOKIE['bar']))
                                    {
                                        $bc=$_COOKIE['bar'];                                  
                                    $sel_pat=mysql_query("select * from cit_data where bar_code='$bc'");
                                    $r_pat=mysql_fetch_row($sel_pat);
                                    ?>
                                <div class="col-lg-6">
                                    <form method="post" class="clearfix" role="form" id="online_form_builder">
                         <table class="table table-bordered table-condensed table-hover table-responsive table-striped">                             
                             <tr>
                                 <td style="width: 50%"><center><img src="cit_pic/<?php echo $r_pat[11] ?>" class="img img-responsive img-thumbnail" style="height: 200px;" /><br /><strong><?php echo $r_pat[1] ?></strong></center></td>
                         <td><?php echo $r_pat[8] ?><br /><?php echo $r_pat[9] ?><br /><span class='fa fa-phone'></span><?php echo $r_pat[10] ?><hr />D.O.B : <?php echo $r_pat[13] ?><BR />Blood Group : <?php echo $r_pat[12] ?><br /><BR />
                             
                         </td>
                             </tr>
                             <tr>
                                 <td colspan="2"><center>
                                 <a href="report.php?report=1&t=1"><span class="label label-warning">PREVIOUS TREATMENT HISTORY</span> </a>
                                 <a href="report.php?report=1&t=2"><span class="label label-primary">MEDICINE PURCHASE HISTORY</span> </a>
                                 <a href="report.php?report=1&t=3"><span class="label label-info">OLD LABORATORY REPORTS</span></a>
                             </center></td>                            
                         </tr>
                         <tr>
                             <td colspan="4"><center>
                                 <iframe src="amr/qrcode.php?id=<?php echo $bc ?>" style="border:none; height: 90px; width: 90px;"></iframe>    
                         </center>
                             </td>
                         </tr>
                         </table>
                          </form>
                                </div>
                
                    <div class="col-lg-6 col-md-6">
                            <?php
                            if(isset($_GET['t']))
                            {
                                if($_GET['t']==1)
                                {
                                   $sel_admit=mysql_query("select * from new_patient where bar_code='$bc' order by id desc");
                                   if(mysql_num_rows($sel_admit)>0)
                                   {
                                       ?>
                            <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                <tr>
                                    <td></td>
                                    <td>Hospital Name</td>
                                    <td>Disease</td>
                                    <td>Date</td>
                                    <td>Doctor</td>
                                    <td>Status</td>
                                </tr>
                                <?php
                                $i=1;
                                while($r_admit=mysql_fetch_row($sel_admit))
                                       {
                                           ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php 
                                    echo $r_admit[1] 
                                            ?> </td>
                                    <td><?php echo $r_admit[4] ?> </td>
                                    <td><?php echo $r_admit[11] ?></td>
                                    <td><?php echo $r_admit[10] ?></td>
                                    <td>
                                        <?php
                                        if($r_admit[14]==0)
                                        {
                                            ?>
                                        <span class="label label-success">Waiting....</span>
                                        <?php
                                        }
                                        if($r_admit[14]==1)
                                        {
                                            ?>
                                        <span class="label label-primary" onclick="shoopinfo('<?php echo $r_admit[0] ?>')" style="cursor: pointer;">Out Patient</span>
                                        <a href="print_r1.php?aid=<?php echo $r_admit[0]  ?>" target="_BLANK"><span class="glyphicon glyphicon-print" style="color: blue"></span></a>
                                        <?php
                                        }
                                        if($r_admit[14]==2)
                                        {
                                            ?>
                                        <span class="label label-danger" onclick="shoadmitinfo('<?php echo $r_admit[0] ?>')" style="cursor: pointer;">Admitted..</span>
                                        <a href="print_r1.php?aid=<?php echo $r_admit[0]  ?>" target="_BLANK"><span class="glyphicon glyphicon-print" style="color: blue"></span></a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                       }
                                ?>
                            </table>
                            <?php                                       
                                   }
                                }
                                if($_GET['t']==2)
                                {
                                   echo"<h3>Medicine Purchase Details</h3>";
                                        $sel_pr=mysql_query("select distinct dt from purchase_medicine where bar_code='$bc' order by id desc");
                                        if(mysql_num_rows($sel_pr)>0)
                                        {
                                            ?>
                                    <script>
                                    function shosale1(x)
                                    {
                                        $("#a"+x).toggle(500);
                                    }
                                    </script>
                                    <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                        <?php
                                        $i=1;
                                        while($r_pr=mysql_fetch_row($sel_pr))
                                        {
                                            ?>
                                        <tr>
                                            <td><div style="cursor: pointer; background-color: #006dcc; color: white;" onclick="shosale1('<?php echo $i ?>')"><b><?php echo $r_pr[0] ?></b></div>
                                                <div id="a<?php echo $i ?>" style="display: none;">
                                                    <?php
                                                    $sel_det=mysql_query("select * from purchase_medicine where dt='$r_pr[0]' and bar_code='$bc'");
                                                    $j=1;
                                                    while($r_det=  mysql_fetch_row($sel_det))
                                                    {
                                                        $sel_shop=mysql_query("select * from org_data where unme='$r_det[1]'");
                                                        $r_shop=mysql_fetch_row($sel_shop);
                                                        if($r_det[3]=="0")
                                                        {
                                                            $p="$j. Direct Purchase from <strong><span style='cursor:pointer;' onclick='shomed1($r_det[0],$r_det[3])'>$r_shop[1]</span></strong><br />";
                                                        }
                                                        else
                                                        {
                                                            $p="$j. Purchase from  from <strong><span style='cursor:pointer;' onclick='shomed1($r_det[0],$r_det[3])'>$r_shop[1]</span></strong> Base on Prescription<br />";
                                                        }
                                                        echo $p;
                                                        $j++;
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                        </tr>     
                                        <?php
                                        $i++;
                                        }
                                        ?>                                                                                                                           
                                    </table>

                                    <?php
                                        }
                                    
                                }
                                if($_GET['t']==3)
                                {
                                    ?>
                                    <script type="text/javascript">
                                                            function  shodetail(x){
                                                                $("#"+x).slideToggle(1000);
                                                            }
                                                            </script>
                                    <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                        <tr>
                                            <td>#</td>
                                            <td>Description</td>
                                            <td>More</td>
                                        </tr>
                                        <?php
                                        $i=1;
                                        $sel_test=mysql_query("select * from purchase_lab where barcode='$bc' order by id desc");
                                        while($r_test=mysql_fetch_row($sel_test))
                                        {
                                            ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td>Test Done from <?php 
                                            $sel_store=mysql_query("select * from org_data where unme='$r_test[1]'");
                                            $r_store=mysql_fetch_row($sel_store);
                                            echo $r_store[1] ?> on <?php echo $r_test[4] ?>
                                            </td>
                                            <td><center><span class="glyphicon glyphicon-arrow-down" style="cursor: pointer;" onclick="shodetail('<?php echo $i ?>')"></span></center></td>
                                        </tr>
                                        <tr id="<?php echo $i ?>" style="display: none;">
                                                                    <td colspan="4">
                                                                        <table class="table table-bordered" style="margin-top: 10px;">
                                                                <?php
                                                                $sel_l1=mysql_query("select * from purchase_lab_test where pid='$r_test[0]'");
                                                               $j=1;
                                                                while($r_l1=mysql_fetch_row($sel_l1))
                                                                {
                                                                    ?>
                                                                
                                                                <tr>
                                                                    <td><?php echo $j ?></td>
                                                                    <td colspan="2">
                                                                        <?php
                                                                        $sel_tst=mysql_query("select * from labtest_data where id='$r_l1[5]'");
                                                                        $r_tst=mysql_fetch_row($sel_tst);
                                                                        echo $r_tst[1];
                                                                        ?>
                                                                    </td>
                                                                    <td><center>
                                                                    <?php
                                                                    if($r_l1[9]==0)
                                                                    {
                                                                      ?>
                                                                    <span class="glyphicon glyphicon-eye-close" title="No Data found" style="cursor: pointer; color: red;"></span>    
                                                                        <?php
                                                                    }
                                                                    else
                                                                    {
                                                                      ?>
                                                                    <a href="lab/<?php echo"$r_l1[8]/$r_l1[7]" ?>" target="_BLANK"><span class="glyphicon glyphicon-download" title="Download File" style="cursor: pointer; color: green"></span></a>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    </center></td>
                                                                </tr>
                                                           
                                                                <?php
                                                                $j++;
                                                                }
                                                                ?>
                                                                 </table>
                                                            </td>
                                                            </tr>
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                    </table>
                                    <?php
                                }
                            }
                            ?>
                        </div>
              
                                <?php
                                    }
                                }
                                ?>
                            </div>
                                                                                
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

