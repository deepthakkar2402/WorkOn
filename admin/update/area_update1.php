<?php
include '../config.php';
$city_id=$_POST['city_id'];
$area_id=$_POST['area_id'];
$area_name=$_POST['area_name'];
$query="UPDATE area_master SET  area_name='$area_name',city_id='$city_id'  WHERE area_id='$area_id'";
// echo $query;exit;
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Updated Succesfully"); window.location.href = "../area.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../area.php";</script>;';
} 
?>