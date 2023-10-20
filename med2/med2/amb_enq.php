<?php
include("connect.php");
 if(isset($_GET['app']))
     
    {
    $apr=$_GET['app'];
    $up=  mysql_query("update hosreg set status='1' where uid='$apr'");
    }
    
    if(isset($_GET['rej']))
     
    {
    $rej=$_GET['rej'];
    $upp=  mysql_query("update hosreg set status='2' where uid='$rej'");
    }



?>
<?php
if(isset($_GET['upd']))
{
                                $upid=$_GET['upd'];
                                $vs="select uid from amb where id='$upid'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
      
    $upd1=mysql_query("update amb set st='1'where id='$upid'");
    
   
    if($upd1>0)
    {
        $upd2=mysql_query("update user_login set status='1'where uid='$vs2'");
    
   
    if($upd2>0)
    {
       header("location:amb_enq.php");
}
}                         
                            
}
}
?>






<?php
                            if(isset($_GET['del']))
{
                                $dete=$_GET['del'];
    $del1=mysql_query("delete from amb where id='$dete'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:amb_enq.php");
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
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="admin.php" style="text-decoration: none">Home</a></li>
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
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2><br />
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="">
                                      <?php
                                      if(isset($_GET['view']))
                                      {
                                          $v=$_GET['view'];
                                          ?>
                                      <form method="post">
                                          <a href="amb_enq.php"><span class="glyphicon glyphicon-backward"></span></a>
                                           
                                      <?php
                                      $sl=mysql_query("select * from amb where id='$v'");
                                      if($sl>0)
                                      {
                                          while($rr=mysql_fetch_row($sl))
                                          {
                                            ?>
                                          <div class="thumbnail" style="text-align: center">
                                            
                                              <img src="img1//<?php echo $rr[7] ?>" style="width: 100px;height: 100px" class="img img-responsive">
                                             <?php echo "<b>Name:   $rr[1]</b><br>"?>
                                               <?php echo "<b>Address:   $rr[2]</b><br>"?>
                                                  
                                                   <?php echo "<b>Email:   $rr[3]</b><br>"?>
                                                   <?php echo "<b>Phone no:   $rr[4]</b><br>"?>
                                              
                                          
                                          </div>       
                                        
                                                           
                                      <?php
                                      
                                          }
                                      }
                                      }    
                                    else 
                                        {
                                      ?>
                                                    <br>
				  	<h2>REGISTERED_AMBULANCE </h2>
                                        <br>
                                       
                                            <table class="table table-bordered table-responsive table-condensed table-hover table-striped">
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        NAME
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        ADDRESS
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        CONTACT NO
                                                    </th>
                                                    <th style="color: grey;font-family:  inherit">
                                                        E-MAIL
                                                    </th>
                                                    <th colspan="3" align="center">
                                                    
                                                        More
                                                    </th>
                                                   
                                                </tr>
                                                <?php
                                                $sl=mysql_query("select * from amb where st='0'");
                                                if($sl>0)
                                                {
                                                    while ($r=mysql_fetch_row($sl))
                                                    {
                                                    ?>    
                                               
                                                        <tr>
                                                            <th>
                                                                <?php echo $r[0] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[1] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[2] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[3] ?>
                                                            </th>
                                                            <th>
                                                                <?php echo $r[4] ?>
                                                            </th>
                                                            <th>
                                                                <a href="amb_enq.php?view=<?php echo $r[0] ?>"><img src="sy/vi.jpg" width="20px" height="20px" title="view more"></a>
                                                         
                                                                
                                                                <a href="amb_enq.php?upd=<?php echo $r[0] ?>"><img src="sy/l.png" width="20px" height="20px" title="Approve"></a>
                                                           
                                                          
                                                                <a href="amb_enq.php?del=<?php echo $r[0] ?>"><img src="sy/u.jpg" width="20px" height="20px" title="DEny"></a>
                                                            </th>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                    }
                                                ?>
                                                
                                            </table>
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

