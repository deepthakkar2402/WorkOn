<?php
include '../config.php';
$area_name=$_POST['area_name'];
$city_id=$_POST['city_id'];
$query="INSERT INTO area_master(area_name,city_id) VALUES('".$area_name."','".$city_id."')";
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Inserted Succesfully"); window.location.href = "../area.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../area.php";</script>;';
} 
?>