<?php
include '../config.php';
$skill_name=$_POST['skill_name'];
$query="INSERT INTO skill_list(name) VALUES('".$skill_name."')";
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Inserted Succesfully"); window.location.href = "../skills.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../skills.php";</script>;';
} 
?>