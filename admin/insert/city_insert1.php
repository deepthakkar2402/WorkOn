<?php
include '../config.php';
$city_name=$_POST['city_name'];
$query="INSERT INTO city_master(city_name) VALUES('".$city_name."')";
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Inserted Succesfully"); window.location.href = "../city.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../city.php";</script>;';
} 
?>