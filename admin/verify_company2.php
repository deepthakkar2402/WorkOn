<?php
include 'config.php';
$id=$_GET['id'];
$query3="UPDATE `company_master_table1` SET com_verified=1 WHERE `email`='".$id."'";
 $result3=mysqli_query($conn,$query3);
//  $v_w=mysqli_num_rows($result3);
if($result3 !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Updated Succesfully"); window.location.href = "verify_company.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "verify_company.php";</script>;';
}
?>