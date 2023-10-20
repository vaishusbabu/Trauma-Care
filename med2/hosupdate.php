<?php
include("connect.php");
session_start();
$hid=$_SESSION['hos'];

$sel=  mysql_query("select * from hosreg where uid='$hid'");
                                    if(mysql_num_rows($sel)>0)
                                    {
                                        $fc=  mysql_fetch_row($sel);
                                    }

if(isset($_POST['sub']))
{
    
  
   $name=$_POST['name'];
   $addr=$_POST['address'];
   $pin=$_POST['pin'];
   $dis=$_POST['district'];
   $email=$_POST['email'];
   $land=$_POST['land'];
   $mob=$_POST['mobile'];
   $u=$_POST['u'];
   $p=$_POST['p'];
   $type=$_POST['type'];
   $lt=$_POST['lt'];
   $lg=$_POST['lg'];
    
   $photo=$_FILES['photo']['name'];
   
   $max=  mysql_query("select max(id) from hosreg");
   $res=  mysql_result($max,0);
   $res++;
   $pos=  strrpos($photo,".");
   $ex=  substr($photo,$pos);
   $ext="$res$ex";
   
   $ins=  mysql_query("update hosreg set name='$name',address='$addr',pin='$pin',district='$dis',email='$email',land='$land',mobile='$mob',type='$type',lattitude='$lt',longitude='$lg',photo='$ext' where uid='$hid'");
  $log=mysql_query("insert into user_login values('','$u','$p','hospital','0')" );
   move_uploaded_file($_FILES['photo']['tmp_name'],  getcwd()."//pic//$ext");
   if($ins>0)
   {
       header("location:hosupdate.php?success=1");
   }
 else {
       header("location:hosupdate.php?success=2");    
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
                                                <li><a href="logout.php"style="text-decoration: none;">Sign out</a></li>
					</ul>				
				</div>
                               
				<div class="clear"> </div>
				<!--end-top-nav-->
                                 
			</div>
			<!--end-header-->
		</div>
		    <div class="row">
                            <div class="col-lg-12">
                        
		   
                        
                            
                                <div class="col-lg-6" >
                                      
                                    <h1 style="font-size: 30px;color: gray">Update Profile</h1>
                                    <br>
                                        <form method="post" enctype="multipart/form-data">
                                           
                                            <center>
                                            <table class="table table-bordered table-responsive">
                                                
                                                
                                                <tr>
                                                    <th style="background-color: lavender" >
                                                        <span><label style="color: grey">NAME</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="name" class="form-control" placeholder="IN BLOCK LETTERS"value="<?php echo $fc[1] ?>"></span>
						    
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color: lavender">
                                                        <span><label style="color: grey">ADDRESS</label></span>
                                                    </th>
                                                    <th>
                                                <span><textarea name="address" class="form-control"><?php echo $fc[2] ?></textarea></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color: lavender">
                                                

                                                        <span><label style="color: grey">PIN</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="pin" class="form-control"value="<?php echo $fc[3] ?>"></span>

                                                    </th>
                                                </tr>
                                                
                                                <tr> 
                                                    <th style="background-color: lavender">

                                                        <span><label style="color: grey">DISTRICT</label></span>
                                                    </th>
                                                    <th>
                                                        <span>
                                                            <select name="district" class="form-control">
                                                                <option value="trivandrum">Trivandrum</option>
                                                                <option value="kollam">Kollam</option>
                                                                <option value="pathanamthitta">Pathanamthitta</option>
                                                                <option value="alappuzha">Alappuzha</option>
                                                                <option value="kottayam">Kottayam</option>
                                                                <option value="kottayam">Idukki</option>
                                                                <option value="kottayam">Ernakulam</option>
                                                                <option value="kottayam">Trissur</option>
                                                                <option value="kottayam">Palakkad</option>
                                                                <option value="kottayam">Malappuram</option>
                                                                <option value="kottayam">Kozhikkodu</option>
                                                                <option value="kottayam">Vayanadu</option>
                                                                <option value="kottayam">Kannur</option>
                                                                <option value="kottayam">Kasargodu</option>
                                                            </select>
                                                        </span>
                                                    </th>
                                                </tr>					    
						    
                                                <tr>
                                                    <th style="background-color: lavender">
                                                        <span><label style="color: grey">E-MAIL</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="email" class="form-control"value=" <?php echo $fc[5] ?>"></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LAND LINE</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="land" class="form-control"value="<?php echo $fc[6]?>"></span>

                                                    </th>
                                                </tr>
                                                <tr> 
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">MOBILE_NO</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="mobile" class="form-control"value="<?php echo $fc[7]?>"></span>

                                                    </th>
                                                </tr>
                                            
                                                <tr>

                                                    <th style="background-color:lavender ">      
                                                        <span><label style="color: grey">USER_ID</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="u" class="form-control"value="<?php echo $fc[8]?>" readonly=""></span>
                                                    </th>

                                                </tr>
                                                <tr>

                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">PASSWORD</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="password" name="p" class="form-control"value="<?php echo $fc[9]?>" readonly=""></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">IS THE HOSPITAL</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="radio" name="type" value="govt"/>GOVT
                                                        <input type="radio" name="type" value="private"/>PRIVATE</span>	

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LATITUDE</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="lt"id="la" class="form-control"value="<?php echo $fc[11]?>"></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LONGITUDE</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="lg" id="lo"class="form-control"value="<?php echo $fc[12]?>"></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">UPLOAD PHOTO</label>             
                                                </span>
                                                    </th>
                                                    <th>
                                                    <input type="file" name="photo" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <span></span>
                                                <tr>
                                                    <th colspan="2">
                                                       <span><input type="submit" name="sub" class="btn btn-sm btn-primary"value="PROCEED"></span>

                                                    </th>
                                                </tr>
                                            </table>
                                            </center>
                                            
                                            <?php
                                            if (isset($_GET['success']))
                                            {
                                                if($_GET['success']=="1")
                                                {
                                                    echo"Profile updated successfully";
                                                }
                                                if($_GET['success']=="2")
                                                {
                                                    echo "Error found!Try again! ";
                                                }
                                            }
                                            
                                            ?>
                                            
					    </form>
                            
                                </div> 
                                
                                <div class="col-lg-6"></div>  
                                 
                        
                        
                        
                                <div class="col-lg-6" style="margin-top: 80px;">
<!--                            <img src="pic/im1.jpg"style="width: 500px">-->
                                    <div id="dvMap" style="width: 100%; height: 500px"></div>
                                        
                                    </div>
                       
                         </div>
                                
                          </div>      
                                                   
                            
                            
                        
                                        
			  
			  	 
                          
                          
                          
                          <div class="clear"> </div>
	
	<div class="clear"> </div>
			
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

