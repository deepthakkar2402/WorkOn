<?php
include 'config.php';
$id=$_GET['id'];
$query3="UPDATE `worker_master` SET wor_block=0 WHERE `wor_email`='".$id."'";
 $result3=mysqli_query($conn,$query3);
//  $v_w=mysqli_num_rows($result3);
if($result3 !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Updated Succesfully"); window.location.href = "unblock_worker.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "unblock_worker.php";</script>;';
}
?>