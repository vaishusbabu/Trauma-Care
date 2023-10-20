<?php
include './connect.php';
if(isset($_POST['add_cit']))
{
    $nm=$_POST['nm'];
    
    $wn=$_POST['wn'];
    $hn=$_POST['hn'];
    $addr1=$_POST['addr'];
    $addr=nl2br($addr1);
    $pin=$_POST['pin'];
    
    $num="09876543211234567890";
    $num1=  substr(str_shuffle($num),5,3);
    
    $bar="$pin-$wn-$hn-$num1";
    
    $pas1="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pas2="abcdefghijklmnopqrstuvwxyz";
    $pas3 ="987654321123456789";
    $pas= str_shuffle(substr(str_shuffle($pas1),5,3)."".substr(str_shuffle($pas2),5,3)."".substr(str_shuffle($pas3),5,3));
    
    $con=$_POST['con'];
    $up=$_FILES['up']['name'];
    $ext1=  strrpos($up, ".");
    $ext=substr($up,$ext1);
    $nfn="$bar$ext";
    
    $bg=$_POST['bg'];
    $dob=$_POST['dob'];
    $ps=$_POST['ps'];
    $descr=$_POST['desr'];
    $ins_cit=mysql_query("insert into cit_data values('','$nm','Nil','Nil','Nil','Nil','$wn','$hn','$addr','$pin','$con','$nfn','$bg','$dob','$ps','$descr','$bar','$pas','0')");
    if($ins_cit>0)
    {
        if(move_uploaded_file($_FILES['up']['tmp_name'],getcwd()."\\cit_pic\\$nfn"))
        {
            header("location:add_citz.php?success=1");
        }
    }
}

?>
<?php
if(isset($_GET['id']))
{
    $sel_cit=mysql_query("select * from cit_data where id='".$_GET['id']."'");
    if(mysql_num_rows($sel_cit)>0)
    {
        $r_cit=mysql_fetch_row($sel_cit);
    }
    else
    {
        header("location:index.php");
    }
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

 
        
        </head>
        
        <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.8932118, 76.6141396),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="admin.php"style="text-decoration: none">Home</a></li>
						<li><a href="addhos.php"style="text-decoration: none">Add Hospital</a></li>
						<li class=""><a href="manage.php"style="text-decoration: none">MANAGE_HOSPITALS</a></li>
						<li><a href="searchpt.php"style="text-decoration: none">SEARCH_PATIENT</a></li>
                                                <li><a href="approve.php"style="text-decoration: none">Approved_Hospitals</a></li>
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
				
                            
                            <div class="col-md-12 col-lg-12">
                                                        <div class="col-md-2 col-lg-2">
                                                            <a href="print.php?id=<?php echo $r_cit[0] ?>" target="_BLANK"><span class="glyphicon glyphicon-print" style="color: green;"></span> Print This Card</a>
                                                        </div>
                                                        <div class="col-md-8 col-lg-8">
                                                        <table class="table table-bordered table-condensed table-hover table-responsive">
                                                            <tr>
                                                                <td style="background-color: black; color: white;"><center><h3><b>MEDICAL E CARD IDENTITY</b></h3></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td rowspan="6"><center><img src="cit_pic/<?php echo $r_cit[11] ?>" class="img img-responsive" style="width: 150px;" /><br /><iframe src="amr\qrcode.php?id=<?php echo $r_cit[16] ?>" style="border:none; height: 90px; width: 90px;"></iframe></center></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b><?php echo strtoupper($r_cit[1]) ?></b> (<?php echo $r_cit[16] ?>)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><div style="float: left;"><?php echo $r_cit[8] ?></div>
                                                                            
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Location : <?php echo $r_cit[8] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>D.O.B : <?php echo $r_cit[13] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Blood Group : <?php echo $r_cit[12] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3"><center></center>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="background-color: black; color:yellow; text-align: right;">
                                                                        <td colspan="3">
                                                                            ISSUED BY :: DEPARTMENT OF MEDICINE
                                                                        </td>   
                                                                    </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                            
                                                    </div><!-- /.col -->
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

