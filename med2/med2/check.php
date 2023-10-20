
<?php
include './connect.php';
ob_start();
session_start();
$tp=$_SESSION['tp'];

?>
<?php

if($tp=$_SESSION['tp'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
 <?php
                                             
                          


$log=mysql_query("select * from p_reg where uid='$tp' and st='0'");
if(mysql_num_rows($log)>0)
{
   
    
    header("location:tp1.php");
    
}
 else {
   header("location:tp2.php"); 
}

    


                                    ?>