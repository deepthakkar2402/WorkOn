<?php
include '../config.php';
$city_id=$_POST['city_id'];
$city_name=$_POST['city_name'];
$query="UPDATE city_master SET  city_name='$city_name' WHERE city_id='$city_id'";
// echo $query;exit;
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Updated Succesfully"); window.location.href = "../city.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../city.php";</script>;';
} 
?>