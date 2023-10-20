<?php

include("connect.php");
$n=$_GET['q'];
$sl=mysql_query("select * from hosreg where name like '$n%' and status='1'");
if(mysql_num_rows($sl)>0)
{
    while($r=mysql_fetch_row($sl))
    {
        ?>
<div class="col-lg-4">
 <center>
     <a href="hdetail.php?hr=<?php echo $r[8] ?>"><img src="pic/<?php echo $r[13] ?>"></a>
<h5><?php echo strtoupper($r[1]) ?></h5>
    </center>
      </div>
            <?php
            }
}
?>

