<?php
include("connect.php");
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
  
   $lt=$_POST['lt'];
   $lg=$_POST['lg'];
    
   $photo=$_FILES['photo']['name'];
   
   $max=  mysql_query("select max(id) from increg");
   $res1=  mysql_fetch_row($max);
   $res=$res1[0];
   $res=$res+1;
   $pos=  strrpos($photo,".");
   $ex=  substr($photo,$pos);
   $ext="$res$ex";
   
   $ins=  mysql_query("insert into increg values('','$name','$addr','$pin','$dis','$email','$land','$mob','$u','$p','0','$lt','$lg','$ext','1')");
  $log=mysql_query("insert into user_login values('','$u','$p','ins','1')" );
   move_uploaded_file($_FILES['photo']['tmp_name'],  getcwd()."//ins_pic//$ext");
   if($ins>0)
   {
       header("location:addins.php?success=1");
   }
 else {
      // header("location:hosreg.php?success=2");    
     echo mysql_error();
   }
}
?>
<?php
session_start();
if($_SESSION['adm'])
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
    <script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
  
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
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
		   <div class="row">
                            <div class="col-lg-12">
                        
		   
                        
                            
                                <div class="col-lg-6" >
                                      
                                    <h4 style="font-size: 30px;color: gray">REGISTER Insurance Company</h4>
                                    <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <center>
                                            <table class="table table-bordered table-responsive">
                                                
                                                
                                                <tr>
                                                    <th style="background-color: lavender" >
                                                        <span><label style="color: grey">NAME</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="name" class="form-control"  placeholder="IN BLOCK LETTERS"value=""></span>
						    </th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th style="background-color: lavender">
                                                        <span><label style="color: grey">ADDRESS</label></span>
                                                    </th>
                                                    <th>
                                                <span><textarea name="address" class="form-control"></textarea></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color: lavender">
                                                

                                                        <span><label style="color: grey">PIN</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="pin" maxlength="6" pattern="[1234567890][0-9]{5}" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                
                                                <tr> 
                                                    <th style="background-color: lavender">

                                                        <span><label style="color: grey">DISTRICT</label></span>
                                                    </th>
                                                    <th>
                                                        <span>
                                                            <select name="district" class="form-control">
                                                                <option value="">-Choose One-</option>
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
                                                        <span><input type="email" name="email" class="form-control" id="email" value=""onkeyup="vem(this.value)" /><span id="em"></span></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LAND LINE</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="land" maxlength="11" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <tr> 
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">MOBILE_NO</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="mobile"class="form-control"value="" onkeyup="chkc(this.value)" /><span id="o3"></span></span>

                                                    </th>
                                                <script>
                                                    function phonenumber(inputtxt)
                                                    {
                                                        var phoneno = /^\d{10}$/;
                                                        if(inputtxt.value.match(phoneno))
                                                        {
                                                            return true;
                                                        }
                                                        else
                                                        {
                                                            alert("Not a valid Phone Number");
                                                            return false;
                                                        }
                                                    }

                                                </script>
                                                </tr>
                                            
                                                <tr>

                                                    <th style="background-color:lavender ">      
                                                        <span><label style="color: grey">USER_ID</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="email" name="u" placeholder="Enter Your Email as User ID" id="confirm_email" class="form-control" value=""></span>
                                                    </th>

                                                </tr>
                                                 <script>
                                                    var email = document.getElementById("email"), confirm_email = document.getElementById("confirm_email");
                                                    function validatePassword()
                                                    {
                                                        if(email.value != confirm_email.value) {
                                                            confirm_email.setCustomValidity("User ID and Email Don't Match");
                                                        } 
                                                        else {
                                                            confirm_email.setCustomValidity('');
                                                        }
                                                    }

                                                    email.onchange = validatePassword;
                                                    confirm_email.onkeyup = validatePassword;
                                                </script>
                                                <tr>

                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">PASSWORD</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="password"  name="p" id="password" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <tr>

                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">CONFIRM PASSWORD</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="password" id="confirm_password" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <script>
                                                    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
                                                    function validatePassword()
                                                    {
                                                        if(password.value != confirm_password.value) {
                                                            confirm_password.setCustomValidity("Passwords Don't Match");
                                                        } 
                                                        else {
                                                            confirm_password.setCustomValidity('');
                                                        }
                                                    }

                                                    password.onchange = validatePassword;
                                                    confirm_password.onkeyup = validatePassword;
                                                </script>
                                                
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LATITUDE</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="lt"id="la" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">LONGITUDE</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="lg" id="lo"class="form-control"value=""></span>

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
                                                    <th style="padding-left: 45%;">
                                                       <span><input type="submit" name="sub" class="btn btn-sm btn-primary "value="PROCEED"></span>

                                                    </th>
                                                    <th>
                                                        
                                                        
                                                    </th>
                                                </tr>
                                            </table>
                                            </center>
                                            
                                            <?php
                                            if (isset($_GET['success']))
                                            {
                                                if($_GET['success']=="1")
                                                {
                                                    echo '<script language="javascript">';
                                                   echo 'alert("Your Registration Sucessfull, Wait for approve!")';
                                                   echo '</script>';
                                                }
                                                if($_GET['success']=="2")
                                                {
                                                   echo '<script language="javascript">';
                                                   echo 'alert("Error! Try again")';
                                                   echo '</script>';
                                                }
                                            }
                                            
                                            ?>
                                            
					    </form>
                            
                                </div> 
                                
                                <div class="col-lg-6"></div>  
                                 
                        
                        
                        
                                <div class="col-lg-6" style="margin-top: 80px;">
<!--                            <img src="pic/im1.jpg"style="width: 500px">-->
                                    <div id="dvMap" style="width: 100%; height: 700px"></div>
                                        
                                    </div>
                       
                         </div>
                                
                          </div>   
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

