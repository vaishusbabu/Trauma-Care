<?php
include './connect.php';
$cid=$_GET['cid'];
$sel_msg=mysql_query("select * from user_communi where cid='$cid' order by id desc");
if(mysql_num_rows($sel_msg)>0)
{
    while($rms=mysql_fetch_row($sel_msg))
    {
        if($rms[3]=="hospital")
        {
            $al="left";
        }
        else
        {
            $al="right";
        }
      ?>
<div style="padding: 5px; width: 80%; border: 1px solid white; box-shadow: 0px 0px 2px black; float: <?php echo $al ?>;margin-top: 5px;">
    <?php echo $rms[2] ?>
</div>
<?php
    }
}   
?>