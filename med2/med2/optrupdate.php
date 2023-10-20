<?php

include("connect.php");
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
$j=$_GET['j'];
$upd=  mysql_query("update optr set busy='$j'where id=$id");
if($upd>0)
{
    ?>
    <table class="table table-bordered table-responsive "style="margin-left: 50px">
                                            <tr>
                                                <th colspan="4"style="color: steelblue;font-size: 20px">
                                                    OPERATION_THEATURE STATUS 
                                                </th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Department
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Theature Name
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    Busy
                                                </th>
                                                
                                                
                                                    <th style="color: steelblue;font-size: 20px">
                                                    Available
                                                </th>
                                                
                                                
                                            </tr>
                                            <?php
                                            $otb=  mysql_query("select * from optr");
                                                if(mysql_num_rows($otb)>0)
                                                {
                                                   
                                                     while ($otr=  mysql_fetch_row($otb))
                                                         {
                                                         
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="text"name="oa"class="form-control" value="<?php echo $otr['2'] ?>"readonly="">
                                                </th>
                                                <th>
                                                    <input type="text"name="ob"id="ob<?php echo $i ?>"class="form-control" value="<?php echo $otr['3'] ?>"readonly="">
                                                </th>
                                                <th>
                                                    <select name="" onchange="changedata('<?php echo $otr[0] ?>',this.value)" class="form-control">
                                                        <option>Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                        
                                                    </select>
                                                </th>
                                                
                                                    <th>
                                                    <?php
                                                    
                                                    if($otr[4]=="Yes")
                                                    {
                                                        ?>
                                                       <label style="color: red"> busy</label>
                                                  <?php
                                                        }
                                                    if($otr[4]=="No")
                                                    {
                                                        ?>
                                                        <label style="color: green"> available</label>
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

<?php
}
 else {
echo "Error found ! try again";    
}

?>
