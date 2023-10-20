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
$hid=$shr[1];


?>
<?php
if($_SESSION['stf'])
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
                <script src="js/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                                    <a href="staffhome.php"style="text-decoration: none"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[3] ?>&nbsp &nbsp<img src="staff_pic/<?php echo $sr[11] ?> "style="width: 70px;height: 70px"></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="staffhome.php" style="text-decoration: none">Home</a></li>
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
                                            <h3 style="font-size: 30px">Update_Informations</h3>
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
                                    <img src="pic/faci1.jpg">
				</div>
				<div class="col-lg-6" class="contact-form">
                                    <form method="post">
                                        <div id="optr">
                                        <table class="table table-bordered table-responsive "style="margin-left: 50px">
                                            <tr>
                                                <th colspan="5"style="color: steelblue;font-size: 20px">
                                                    OPERATION_THEATURE STATUS 
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Department
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Theature Name
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Busy
                                                </th>
                                                
                                                <th style="color: steelblue;font-size: 20px">
                                                   Available 
                                                </th>
                                                
                                            </tr>
                                            <?php
                                            
                                            
                                            $otb=  mysql_query("select * from optr");
                                                if(mysql_num_rows($otb)>0)
                                                {
                                                   
                                                     while ($otr=  mysql_fetch_row($otb))
                                                         {
                                                         
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="text"name="oa"class="form-control" value="<?php echo $otr['2'] ?>"readonly="">
                                                </th>
                                                <th>
                                                    <input type="text"name="ob"id="ob<?php echo $i ?>"class="form-control" value="<?php echo $otr['3'] ?>"readonly="">
                                                </th>
                                                <th>
                                                    <select name="osl" onchange="changedata('<?php echo $otr[0] ?>',this.value)"class="form-control" >
                                                        <option value="">Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                        
                                                    </select>
                                                </th>
                                                <th>
                                                    <?php
                                                    
                                                    if($otr[4]=="Yes")
                                                    {
                                                        ?>
                                                       <label style="color: red"> busy</label>
                                                  <?php
                                                        }
                                                    if($otr[4]=="No")
                                                    {
                                                        ?>
                                                        <label style="color: green"> available</label>
                                                        <?php
                                                    }
                                                    
                                                    ?>
                                                </th>
                                                
                                                    
                                            </tr>
                                            <?php
                                                         }
                                                }
                                            
                                            ?>
                                            
                                        </table>
                                        </div>
                                        <script>
                                            function changedata(p,j)
                                            {
//                                                var sl=document.getElementById("ta"+i).value;
//                                                var ntd=document.getElementById("tb"+i).value;
                                                $("#optr").load("optrupdate.php?id="+p+"&j="+j);
                                                //alert();
                                                //alert(td+","+ntd+","+bal);
                                            }
                                        </script>
                                        <div id="iculist">
                                        <table class="table table-bordered table-responsive" style="margin-left: 50px">
                                            <tr>
                                                <th colspan="5"style="color: steelblue;font-size: 20px">
                                                    ICU STATUS
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    ICU Name
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    No of Beds
                                                    
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Busy
                                                    
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Next Available
                                                    
                                                </th>
                                                
                                            </tr>
                                            <?php
                                            
                                            
//                                                
                                            
                                            
                                            
                                            
                                            $ic=  mysql_query("select * from add_icu where hosid='$shid'");
                                            if(mysql_num_rows($ic)>0)
                                            {
                                                $i=0;
                                            while($icr=mysql_fetch_row($ic))
                                            {
                                            
                                            $i++;
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="text"name="t1"value="<?php echo $icr[3] ?>"class="form-control"readonly="">
                                                </th>
                                                <th>
                                                    <input type="text"name="t2" id="ta<?php echo $i ?>" value="<?php echo $icr[4] ?>" class="form-control"readonly="">
                                                    
                                                </th>
                                                <th>
                                                    <input type="text"name="t3" id="tb<?php echo $i ?>" value="<?php echo $icr[6] ?>" onblur="chngdata('<?php echo $icr[0] ?>','<?php echo $i ?>')" class="form-control">
                                                </th>
                                                <th>
                                                    <input type="text"name="t4"value="<?php echo $icr[7] ?>" class="form-control">
                                                </th>
                                                
                                            </tr>
                                            <?php
                                            }
                                            }
                                            
                                            ?>
                                        </table>
                                        </div>
                                        <script>
                                            function chngdata(x,i)
                                            {
                                                var td=document.getElementById("ta"+i).value;
                                                var ntd=document.getElementById("tb"+i).value;
                                                $("#iculist").load("icuupdate.php?id="+x+"&td="+td+"&ntd="+ntd);
                                                //alert();
                                                //alert(td+","+ntd+","+bal);
                                            }
                                        </script>
                                    </form>
                                </div>
		   </div>
		   
		    		</div>
		    		
		   
		    		
		   
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		  
		<!--end-wrap-->
	</body>
</html>

