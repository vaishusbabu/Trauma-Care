<?php
include './connect.php';
$q=$_GET['q'];
$sel=mysql_query("select * from ptreg where comid='$q'");
if(mysql_num_rows($sel)>0)
{
    $r=mysql_fetch_row($sel);
    echo"$r[1],$r[8]";
}
 else {
    echo"0";
}
?>