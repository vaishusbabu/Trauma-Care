<?php
include("connect.php");
session_start();
$sid=$_SESSION['stf'];
$ssel=  mysql_query("select * from staff_reg where uid='$sid'");
if(mysql_num_rows($ssel)>0)
{
    $sr=mysql_fetch_row($ssel);
    $shid=$sr[1];
}
else{
    header("location:login.php");
}
$hn=mysql_query("select * from hosreg where uid='$shid'");
if(mysql_num_rows($hn)>0)
{
    $shr=mysql_fetch_row($hn);
    $id=$shr[8];
}
?>
<form method="post">
    <table class="table table-bordered table-responsive">
        <tr>

            <th colspan="9"style="color: steelblue;font-size: 25px">
                ACCIDENT NOTIFICATION 1
            </th>

        </tr>
        <tr>

            <th style="color: gray">
                PICTURE
            </th>                                                
            <th style="color: gray">
                LATTITUDE
            </th>
            <th style="color: gray">
                LONGITUDE
            </th>                                                
            <th colspan="2"></th>

        </tr>

        <?php
        $msl=  mysql_query("select * from image where hid='$id' and dt='".date('Y-m-d')."' order by id desc");
        if(mysql_num_rows($msl)>0)
        {
            while ($mr=mysql_fetch_row($msl))
            {
        ?>
        <tr>
            <th>
                <img src="pic/<?php echo $mr[3] ?>"style="width: 150px;height: 150px"> 
            </th>

            <th>
                <?php echo $mr[4] ?>
            </th>
            <th>
                <?php echo $mr[5] ?>
            </th>                                                
            <th colspan="2">
               <?php
               if($mr[6]=="1")
               {

               ?> 
                <a href="" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: steelblue;border-color: black;color: white">Approved</a>
           <?php
               }

               else if($mr[6]=="2")
               {
               ?>
                <a href="" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: red;border-color: black;color: white">Rejected</a>
           <?php
               }
               else if($mr[6]=="3")
               {
               ?>
                <span class="label label-success"><a target="_BLANK" href="hcommunication.php?aid=<?php echo $mr[1] ?>">Patients Selected Your Hospital</a></span>
           <?php
               }
               else if($mr[6]=="4")
               {
               ?>
                <span>They are Moved to Other Hospital</span>
           <?php
               }
               else if($mr[6]=="5")
               {
               ?>
                <span>Admitted</span>
           <?php
               }

               else
                {
               ?>

                <a href="staffhome.php?t=<?php echo $mr[0]?>" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: green;border-color: black;color: white">Approve</a>


                <br>
                <a href="staffhome.php?p=<?php echo $mr[0]?>" style="text-decoration: none; text-align: center;border-radius: 50px;display:  block;width: 80px;background-color: red;border-color: black;color: white">Reject</a>
           <?php
                }
                ?>
            </th>

        </tr>
        <?php
            } 
        }
        ?>




    </table>
</form>