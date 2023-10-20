<?php
include './connect.php';
session_start();
$sid=$_SESSION['stf'];
$ssel=  mysql_query("select * from staff_reg where uid='$sid'");
if(mysql_num_rows($ssel)>0)
{
    $sr=mysql_fetch_row($ssel);
}
$shid=$sr[1];
$hn=mysql_query("select * from hosreg where uid='$shid'");
if(mysql_num_rows($hn)>0)
{
    $shr=mysql_fetch_row($hn);
}
$hid=$shr[1];

$id=$_GET['id'];
$td=$_GET['td'];
$ntd=$_GET['ntd'];
$bal=$td-$ntd;
$up=mysql_query("update add_icu set bbed='$ntd',nextavl='$bal' where id='$id'");
if($up>0)
{
 ?>
<table class="table table-bordered table-responsive" style="margin-left: 50px">
                                            <tr>
                                                <th colspan="5"style="color: steelblue;font-size: 20px">
                                                    ICU STATUS
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    ICU Name
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    No of Beds
                                                    
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Busy
                                                    
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Next Available
                                                    
                                                </th>
                                                
                                            </tr>
                                            <?php
                                            
                                            $ic=  mysql_query("select * from add_icu where hosid='$shid'");
                                            if(mysql_num_rows($ic)>0)
                                            {
                                                $i=0;
                                            while($icr=mysql_fetch_row($ic))
                                            {
                                            
                                            $i++;
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="text"name="t1"value="<?php echo $icr[3] ?>"class="form-control"readonly="">
                                                </th>
                                                <th>
                                                    <input type="text"name="t2" id="ta<?php echo $i ?>" value="<?php echo $icr[4] ?>" class="form-control"readonly="">
                                                    
                                                </th>
                                                <th>
                                                    <input type="text"name="t3" id="tb<?php echo $i ?>" value="<?php echo $icr[6] ?>" onblur="chngdata('<?php echo $icr[0] ?>','<?php echo $i ?>')" class="form-control">
                                                </th>
                                                <th>
                                                    <input type="text"name="t4"value="<?php echo $icr[7] ?>" class="form-control">
                                                </th>
                                               
                                            </tr>
                                            <?php
                                            }
                                            }
                                            
                                            ?>
                                        </table>
<?php
}
 else {
echo "Error found! try again";    
}
?>
