<?php
include("connect.php");
session_start();
$admn=$_SESSION['adm'];



?>
<?php

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
		<title>medicare Website Template | About :: W3layouts</title>
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
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
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
                       <a href="addins.php">  <span style="float: right"class="btn btn-success">Insurance</span></a>&nbsp;&nbsp;   <a href="re1.php">  <span style="float: right"class="btn btn-success">Hospital Report</span></a>&nbsp;&nbsp;  <a href="re.php">  <span style="float: right"class="btn btn-success">Accident Report</span></a>&nbsp;&nbsp;     <a href="t_con.php">  <span style="float: right"class="btn btn-primary">Add Traffic Control</span></a>&nbsp;&nbsp;<a href="add_citz.php"> &nbsp;&nbsp;       <a href="amb_enq.php">  <span style="float: right"class="btn btn-success">Ambulance Enquirey</span></a>
		   	<div class="about">
		   		<h4>Search Hospital</h4>
		   <div class="content-box">
		   <div class="section group">
			<script>
                
                function loaddata(x)
            {
                
                var xmlhttp=new XMLHttpRequest();
               
                xmlhttp.open("GET","data.php?q="+x,true);
                xmlhttp.send();
                 
                xmlhttp.onreadystatechange=function()
                {
                    
                    if(this.readyState==4&&this.status==200)
                    {
                       
                      document.getElementById("test").innerHTML=this.responseText; 
                      
                    }
                };
                
            }
                
                
                
                </script>	
				<div class="col_1_of_1 span_1_of_1 second">
                                    <input type="text" name="sr" placeholder="Search" class="form-control"onkeyup="loaddata(this.value)">
                                    <br><br>
                                    
                                    <span id="test">
                                    
                                        
                                        <?php
                                    $hsl=  mysql_query("select * from hosreg where status='1'");
                                    if(mysql_num_rows($hsl)>0)
                                    {
                                        while ($hrs=mysql_fetch_row($hsl))
                                        {
                                            ?>
                                    <div class="col-lg-4">
                                        <center>  
                                            <a href="hdetail.php?hr=<?php echo $hrs[8] ?>"> <img src="pic/<?php echo $hrs[13] ?>" class="img img-responsive" style="height: 250px;"></a>
                                    <h5><?php echo strtoupper($hrs[1]) ?></h5>
                                        </center>
                                    </div>
                                    <?php
                                        }
                                    }
                                    
                                    
                                    ?>
                                    </span>
				</div>
				
			</div>
		   </div>
		   </div>
		   </div>
		   <div class="clear"> </div>
                   <br><br><br><br><br>
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

