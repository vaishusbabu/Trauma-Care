<?php
include("connect.php");
$la=$_GET['la'];
    $lo=$_GET['lo'];
?>
<html>
    <head></head>
    <body onload="getLocation1();">
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
 
  
<script>


function getLocation1() {
    
    //document.getElementById("srs1").value = position.coords.latitude + "," + position.coords.longitude;
     //document.getElementById("la1").innerHTML=position.coords.latitude;
     var uluru = {lat: <?php echo $la ?>, lng: <?php echo $lo ?>};
        var map1 = new google.maps.Map(document.getElementById('map4'), {
            
          zoom: 13,
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
          icon:"images/arrow.png"
        });
        <?php
       
        $sel_info=mysql_query("SELECT id, ( 6371 * acos( cos( radians($la) ) * cos( radians( lattitude ) ) * cos( radians( longitude ) - radians($lo) ) + sin( radians($la) ) * sin( radians( lattitude ) ) ) ) AS distance FROM hosreg HAVING distance < 35 ORDER BY distance LIMIT 0 , 20;");
if(mysql_num_rows($sel_info)>0)                                         
{
   while($r_info=mysql_fetch_row($sel_info)) 
   {
       $sel_gal=mysql_query("select * from hosreg where id='$r_info[0]' and status=1");
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
                    icon:'images/hospital123.png',
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
    </body>
</html>