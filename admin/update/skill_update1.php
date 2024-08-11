<?php
include '../config.php';
$skill_id=$_POST['skill_id'];
$skill_name=$_POST['skill_name'];
$query="UPDATE skill_list SET  name='$skill_name' WHERE skill_list_id='$skill_id'";
// echo $query;exit;
$result=mysqli_query($conn,$query);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Data Updated Succesfully"); window.location.href = "../skills.php";</script>;';
}
else
{
    echo '<script type="text/javascript">alert("Failed"); window.location.href = "../skills.php";</script>;';
} 
?>