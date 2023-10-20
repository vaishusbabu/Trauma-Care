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
    $id=$shr[8];
}
if(isset($_GET['aid']))
{
    $sel=mysql_query("select * from accident_cid where accident_id='".$_GET['aid']."'");
    $r=mysql_fetch_row($sel);
    $cid=$r[3];
}
if(isset($_POST['sub']))
{
    $msg=addslashes(nl2br($_POST['msg']));
    $ins_msg=mysql_query("insert into user_communi VALUES('','$cid','$msg','hospital')");
    if($ins_msg>0)
    {
        header("location:hcommunication.php?aid=".$_GET['aid']);
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
		<title>medicare <?php echo $cid ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                <script src="js/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

        </head>
        <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
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
    <body onload="update()">
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
                                    <a href="staffhome.php" style="text-decoration: none"><span style="color: steelblue;font-size: 30px">Welcome <?php echo $sr[3] ?>&nbsp &nbsp<img src="staff_pic/<?php echo $sr[11] ?> "style="width: 70px;height: 70px"></span></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="staffhome.php"style="text-decoration: none">Home</a></li>
						<li><a href="patientreg.php" style="text-decoration: none">Patient_Registration</a></li>
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
                            <div class="col span_1_of_3">
                                <img src="pic/logo1.jpg" class="img img-responsive" />
                                <img src="pic/logo2.jpg" class="img img-responsive" />
                                <img src="pic/logo1.jpg" class="img img-responsive" />
                            </div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <form method="post">
                                          <br><br><br>
                                          <table class="table table-bordered table-responsive">
                                              <tr>
                                                  <td>
                                                      MESSAGE
                                                  </td>
                                                  <td>
                                                      <textarea name="msg" class="form-control"></textarea>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td colspan="2">
                                                      <a target="_blank" href="patientreg.php?cid=<?php echo $cid ?>&aid=<?php echo $_GET['aid'] ?>" class="label label-warning">Appoint This Patient</a>
                                                      <input type="submit" name="sub" value="SEND MESSAGE" class="btn btn-sm btn-primary pull-right">
                                                  </td>
                                              </tr>
                                          </table>
                                          <script>
                                          function update() {                                             
                                                $.get("loadchat.php?cid=<?php echo $cid ?>", function(data) {
                                                    $("#mssg").html(data);
                                                });
                                                window.setTimeout("update();", 100);
                                            }
                                          </script>
                                          <div id="mssg">
                                          <?php
                                          $sel_msg=mysql_query("select * from user_communi where cid='$cid' order by id desc");
                                          if(mysql_num_rows($sel_msg)>0)
                                          {
                                              while($rms=mysql_fetch_row($sel_msg))
                                              {
                                                  if($rms[3]=="hospital")
                                                  {
                                                      $al="left";
                                                  }
                                                  else
                                                  {
                                                      $al="right";
                                                  }
                                                ?>
                                          <div style="padding: 5px; width: 80%; border: 1px solid white; box-shadow: 0px 0px 2px black; float: <?php echo $al ?>;margin-top: 5px;">
                                              <?php echo $rms[2] ?>
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

