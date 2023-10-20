<?php
include 'connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
if(isset($_SESSION['uid']))
{
    $usr=$_SESSION['uid'];
    $sel_data=mysql_query("select * from user_data where em='$usr'");
    $r_data=mysql_fetch_row($sel_data);
}
 else
     {
    header("location:index.php");    
}
$sid=$_GET['search'];
$sel_book=mysql_query("select * from user_search where uid='$usr' and id='$sid' and date='".date('Y-m-d')."'");
if(mysql_num_rows($sel_book)>0)
{
    $rb=mysql_fetch_row($sel_book);
    $myloc= explode(",", $rb[4]);
    $lat=$myloc[0];
    $lon=$myloc[1];
}
 else {
    header("location:user_home.php");    
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Book My Taxi</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="temp/css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="temp/css/style.css" />
<link rel="stylesheet" type="text/css" href="temp/css/component.css" />
<script type="text/javascript" src="temp/js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script>
function start()
{
getLocation();
getLocation1();
}
</script>
</head>
<body onload="start()" style="background-color: #D6D6D6">
<!--/banner-section-->
	<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
                    
				  <!-- //header-left -->
		             <div class="search-box">
						
						<!-- search-scripts -->
						<script src="temp/js/classie.js"></script>
						<script src="temp/js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					    <ul>
                                                    <li style="margin-right: 10px;">
                                                        <a href="user_home.php"><i class="glyphicon glyphicon-home" aria-hidden="true"></i><?php echo $r_data[1] ?>'s Home</a></li>
							<li style="margin-right: 10px;">
                                                            <a href="my_book.php"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>My Booking</a></li>
							<li>
                                                            <a href="logout.php"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>LogOut</a></li>
			
							<li>
							 
					<script src="temp/js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
						</ul>
						
					</div>
				   
						
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
                            <h1><a href="user_home.php">Budget <span class="logo-sub">Cars</span> </a></h1>
			     <h2><span>AIRPORTS </span> | <span>SEAPORTS</span> | <span>LONG DISTANCE RUNS</span> | <span>MINIBUS</span></h2>
				<p>SEARCH – SELECT – GO!</p>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div><!-- discounts-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
<script>
function shofullmap()
{
    $("#carlist").slideToggle(1000);
    
    //$("#mapview").slideToggle(1000);
}
</script>                                  
			
			<!-- //discounts-->
				<!-- //sign-up-->
				
	
                                <br /><div class="pull-left"><img src="images/mapview.png" style="width: 50px; float: left;" onclick="shofullmap()" /></div>
                                <?php
                                if(isset($_GET['mid']))
                                {
                                    ?>
                                <h3 class="tittle" id="avcar">BOOK THIS CAR </h3>
                                <?php
                                }
                                else
                                {
                                ?>
                                <h3 class="tittle" id="avcar">AVAILABLE CARS </h3>
                                <?php
                                }
                                ?>
                      
	               <div class="">
				<div class="container" id="carlist">
				 <div class="col-md-9 col-lg-9">
                                     <?php
                                     function GetDrivingDistance($srs, $des)
                                    {
                                        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$srs."&destinations=".$des."&mode=driving&language=pl-PL";
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                        $response = curl_exec($ch);
                                        curl_close($ch);
                                        $response_a = json_decode($response, true);
                                        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
                                        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];

                                        return array('distance' => $dist, 'time' => $time);
                                    }
                                     if(isset($_GET['mid']))
                                     {
                                         $cid=$_GET['mid'];
                                         $sel_taxi=mysql_query("select * from taxi_data where car_id='$cid'");
                                         $r_taxi=mysql_fetch_row($sel_taxi);
                                         ?>
                                     <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
                                     <script>
                                         function loadbookdata(c,b)
                                         {
                                             //alert(c+","+b);
                                             //$("#rslt").load("savereq.php?c="+c+"&b="+b);
                                            var xmlhttp = new XMLHttpRequest();
                                            xmlhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    $("#btndata").hide(500);
                                                    document.getElementById("rslt").innerHTML = this.responseText;
                                                }
                                            };
                                            xmlhttp.open("GET", "savereq.php?c="+c+"&b="+b, true);
                                            xmlhttp.send();
                                         }
                                     </script>
                                    
                                    <div class="news-grid" style="box-shadow: 0px 0px 1px black">
					    <div class="news-img up">
                                                <a href=""> <img src="admin/img1/<?php echo $r_taxi[8] ?>" alt=" " class="img-responsive"></a>
						  <span class="price1"><?php echo round($_GET['d']) ?> KM Away</span>
						</div>
					    <div class="news-text coming">
						    <h3><a href=""><?php echo $r_taxi[1] ?></a></h3>
							<h5>Brand: <?php echo $r_taxi[2] ?></h5>
                                                        <p class="news"><span class="fa fa-user"></span> Seat Capacity:<i style="color: green"> <?php echo $r_taxi[4] ?> </i> <span class="fa fa-briefcase"></span> Boot Space: <i style="color: green"><?php echo $r_taxi[5] ?></i></p>
							<h6>Located <?php echo round($_GET['d']) ?> KM Away from Your Location</h6>
                                                        <?php                                                        
                                                        $sel_serch1=mysql_query("select * from user_search where id='".$_GET['search']."'");
                                                        $r_search1=mysql_fetch_row($sel_serch1);
                                                        $sr1=$r_search1[4];
                                                        $de1=$r_search1[5];
                                                        $x1=GetDrivingDistance($sr1,$de1);
                                                        $km1=str_replace(",", ".", $x1['distance']);
                                                        $mil1=round($km1/1.609344,7);
                                                        echo"Distance : ".$mil1."Mile<br />Time : About ".$x1['time'];
                                                        $km1=str_replace(",", ".", $x1['distance']);
                                                        $mil1=round($km1/1.609344,7);
                                                        if($mil1<1.8)
                                                        {
                                                            $amt1=5.50;
                                                        }
                                                        else
                                                        {
                                                            $m1=ceil($mil1-1.8);
                                                            $amt1=$amt1+($m1*1.50);
                                                        }
                                                        ?>
							<br /><br />
                                                        <h6 style="color:green; background-color:yellow; text-align:center; padding:4px; box-shadow: 1px 1px 2px black">Approximate Amount for <?php echo $mil1 ?> Mile : &#163;<?php echo $amt1 ?></h6>
                                                        <div id="btndata">
                                                        <div class="label label-success" onclick="loadbookdata('<?php echo $_GET['mid'] ?>','<?php echo $_GET['search'] ?>')" style="cursor: pointer">BOOK NOW</div>
                                                        <a href="user_book.php?search=<?php echo $_GET['search'] ?>"><div class="label label-danger">GO TO BACK</div></a>
                                                        </div>
                                                        <div id="rslt"></div>
						</div>
                                        
						<div class="clearfix"></div>
					 </div>	 
                                     
                                     <?php
                                     }
                                     else
                                     {
                                     $sel_info=mysql_query("SELECT id, ( 6371 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM taxi_data HAVING distance < 10 ORDER BY distance LIMIT 0 , 20;");
                                     echo mysql_error();
                                     if(mysql_num_rows($sel_info)>0)                                         
                                     {                                         
                                        while($r_info=mysql_fetch_row($sel_info)) 
                                        {                                            
                                            //echo "$r_info[0],$r_info[1]";
                                       
                                                        $sel_gal=mysql_query("select * from taxi_data where id='$r_info[0]' and st=2");
                                                        if(mysql_num_rows($sel_gal)>0)
                                                        {
                                                            $i=0;
                                                            while($r_gal=mysql_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					 <div class="news-grid" style="box-shadow: 0px 0px 1px black">
					    <div class="news-img up">
                                                <a href=""> <img src="admin/img1/<?php echo $r_gal[8] ?>" alt=" " class="img-responsive"></a>
						  <span class="price1"><?php echo round($r_info[1]) ?> KM Away</span>
						</div>
					    <div class="news-text coming">
						    <h3><a href=""><?php echo $r_gal[1] ?></a></h3>
							<h5>Brand: <?php echo $r_gal[2] ?></h5>
                                                        <p class="news"><span class="fa fa-user"></span> Seat Capacity:<i style="color: green"> <?php echo $r_gal[4] ?> </i> <span class="fa fa-briefcase"></span> Boot Space: <i style="color: green"><?php echo $r_gal[5] ?></i></p>
                                                        <?php
                                                        
                                                        $sel_serch=mysql_query("select * from user_search where id='".$_GET['search']."'");
                                                        $r_search=mysql_fetch_row($sel_serch);
                                                        $sr=$r_search[4];
                                                        $de=$r_search[5];
                                                        $x=GetDrivingDistance($sr,$de);
                                                        $km=str_replace(",", ".", $x['distance']);
                                                        $mil=round($km/1.609344,7);
                                                        echo"Distance : ".$mil."Mile<br />Time : About ".$x['time'];
                                                        $km=str_replace(",", ".", $x['distance']);
                                                        $mil=round($km/1.609344,7);
                                                        if($mil<1.8)
                                                        {
                                                            $amt=5.50;
                                                        }
                                                        else
                                                        {
                                                            $m=ceil($mil-1.8);
                                                            $amt=$amt+($m*1.50);
                                                        }
                                                        ?>
							<br /><br />
                                                        <h6 style="color:green; background-color:yellow; text-align:center; padding:4px; box-shadow: 1px 1px 2px black">Approximate Amount for <?php echo $mil ?> Mile : &#163;<?php echo $amt ?></h6>
							<a href="user_book.php?mid=<?php echo $r_gal[3] ?>&search=<?php echo $_GET['search'] ?>&d=<?php echo round($r_info[1]) ?>" class="read hvr-shutter-in-horizontal">Book This Taxi</a>
							
					
						</div>
		
						<div class="clearfix"></div>
					 </div>	
                                     
                                     
                                     <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                           ?>
                                     <center>
                                         
                                     <img src="img1/not.jpg" class="img img-responsive" />
                                     </center>
                                     <?php  
                                                        }
                                                        }
                                     }
                                     else
                                     {
                                         
                                         ?>
                                     <center>
                                         <h3>No Taxi Found</h3>
                                     <img src="img1/not.jpg" class="img img-responsive" />
                                     </center>
                                     <?php
                                     }
                                     
                                                            }
                                                            ?>

                                     
					  
					 
					   
					  
					 
								
				</div>	
			    <div class="col-md-3 col-lg-3" style="box-shadow: 0px 0px 1px black" id="sidecarview"><br />
					<?php
                                $sel_gal=mysql_query("select * from taxi_data order by rand()");
                                                        if(mysql_num_rows($sel_gal)>0)
                                                        {
                                                            while($r_gal=mysql_fetch_row($sel_gal))
                                                            {
                                                                ?>
                                                            
					<div class="blo-top" style="box-shadow: 0px 0px 2px #4D4C4C">
						<div class="tech-btm one">
						<img src="admin/img1/<?php echo $r_gal[8] ?>" class="img-responsive" alt="">
						</div>
					</div>
					<?php
                                                            }
                                                        }
                                        ?>
					
					</div>
                                  				
					
					</div><br />
                           <div class="container" id="mapview">
                           <div class="row">
                               <div class="col-lg-12">
                                   <script>
      function getLocation() {
        
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        //x.value = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    //document.getElementById("srs1").value = position.coords.latitude + "," + position.coords.longitude;
     //document.getElementById("la1").innerHTML=position.coords.latitude;
     var uluru = {lat: <?php echo $lat ?>, lng: <?php echo $lon ?>};
        var map = new google.maps.Map(document.getElementById('map3'), {
            
          zoom: 12,
          center: uluru
        });
        google.maps.event.addListener(map, 'click', function (e) {
          var loc=e.latLng.lat()+","+e.latLng.lng();            
            //document.getElementById("srsloc").innerHTML=loc;
            alert(loc);
               //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
            });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title:"Your Position",
          icon:"images/user.png"
        });
        <?php
        $sel_info=mysql_query("SELECT id, ( 6371 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM taxi_data HAVING distance < 35 ORDER BY distance LIMIT 0 , 20;");
echo mysql_error();
if(mysql_num_rows($sel_info)>0)                                         
{
   while($r_info=mysql_fetch_row($sel_info)) 
   {
       $sel_gal=mysql_query("select * from taxi_data where id='$r_info[0]' and st=2");
            if(mysql_num_rows($sel_gal)>0)
            {
                $i=0;
                while($r_gal=mysql_fetch_row($sel_gal))
                {
                    $lat=$r_gal[11];
                    $lon=$r_gal[12];
                    ?>
                var uluru = {lat: <?php echo $lat ?>, lng: <?php echo $lon ?>};
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title:"<?php echo $r_gal[3] ?>,<?php echo $r_gal[1] ?>",
                    icon:'images/car1.png',
                  });
                            <?php
                }
            }
   }
}

        ?>
}
  </script>
					<div class="blo-top">
						<?php
                                                $sid=$_GET['search'];
$sel_book=mysql_query("select * from user_search where uid='$usr' and id='$sid' and date='".date('Y-m-d')."'");
if(mysql_num_rows($sel_book)>0)
{
    $rb=mysql_fetch_row($sel_book);
    $myloc= explode(",", $rb[4]);
    $lat=$myloc[0];
    $lon=$myloc[1];
}
 else {
    header("location:user_home.php");    
}
                                                ?>
  <script>


function getLocation1() {
    //document.getElementById("srs1").value = position.coords.latitude + "," + position.coords.longitude;
     //document.getElementById("la1").innerHTML=position.coords.latitude;
     var uluru = {lat: <?php echo $lat ?>, lng: <?php echo $lon ?>};
        var map1 = new google.maps.Map(document.getElementById('map4'), {
            
          zoom: 12,
          center: uluru
        });
        google.maps.event.addListener(map1, 'click', function (e) {
          var loc=e.latLng.lat()+","+e.latLng.lng();            
            //document.getElementById("srsloc").innerHTML=loc;
            alert(loc);
               //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
            });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map1,
          title:"Your Position",
          icon:"images/user.png"
        });
        <?php
        $sel_info=mysql_query("SELECT id, ( 6371 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM taxi_data HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;");
echo mysql_error();
if(mysql_num_rows($sel_info)>0)                                         
{
   while($r_info=mysql_fetch_row($sel_info)) 
   {
       $sel_gal=mysql_query("select * from taxi_data where id='$r_info[0]' and st=2");
            if(mysql_num_rows($sel_gal)>0)
            {
                $i=0;
                while($r_gal=mysql_fetch_row($sel_gal))
                {
                    $lat=$r_gal[11];
                    $lon=$r_gal[12];
                    ?>
                var uluru = {lat: <?php echo $lat ?>, lng: <?php echo $lon ?>};
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map1,
                    title:"<?php echo $r_gal[3] ?>,<?php echo $r_gal[1] ?>",
                    icon:'images/car1.png',
                  });
                            <?php
                }
            }
   }
}

        ?>
}
  </script>
  
        <div id="map4" style="width: 100%; height: 500px;"></div>
					</div>
					
					</div>
                           </div>	
                           </div>
			</div>
	
	
	<!-- //bottom-banner -->
	<!-- /slider1 -->
			
	<!-- //slider -->
	<!-- Services -->
	
		<div class="clearfix"></div>
		<!-- //Services -->
			<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
                            <h2><a href="user_home.php">BUDGET CARS <span>Search – Select – Go</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
                            <p>&copy 2018 Budget Cars. All rights reserved | Design by <a href="http://www.trinitytechnology.in/" target="_BLANK">Trinity Software Technology</a></p>
			</div>
		</div>
	</div>

<script src="temp/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="temp/js/jquery.zoomslider.min.js"></script>
		<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed:1000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 1
						},
						tablet: { 
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				});
				</script>
						<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
					<script type="text/javascript" src="temp/js/jquery.flexisel.js"></script>
<script src="temp/js/bootstrap.js"></script>
 

</body>
</html>