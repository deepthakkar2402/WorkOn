
<?php

$id = $_GET['id'];
$password = $_POST['password'];
$username = $_POST['username'];


/*
$gender = $_POST['rdo_Gender'];
$address = $_POST['ta_Address'];
$contact = $_POST['txt_Contact'];

/*
Step 1: Connect to MySQL Server / DBMS
mysql_connect(servername,username,password)
	Connection Successful : Connection Reference
	Connection Unsuccessful : False

Step 2: Select database
mysql_select_db(database name,connection variable)
	Connection Successful : True
	Connection Unsuccessful : False

Step 3: Execute Query
mysql_query(query,connection variable)
	INSERT,DELETE,UPDATE Query
		Query Execution Successful : True
		Query Execution Unsuccessful : False
	SELECT Query
		Query Execution Successful : Result Set
		Query Execution Unsuccessful : False

Step 4: Display Result(ONLY In case of Select Query)
mysql_fetch_array(resultset)
*/
@$conn = mysqli_connect('localhost','root','');
if($conn === FALSE)
{
	die("Connection Problem");
}
$db_selected= mysqli_select_db($conn,'demo');
//$query = "INSERT INTO `test_tbl`(name,gender,address,contact) 
//		VALUES ('$name','$gender','$address',$contact);";
//$query = "UPDATE `admin_master` SET `password` = '$name' WHERE `sno` = 2";
//echo $query;
 
//$query = "INSERT INTO `test_tbl`(name,gender,address,contact) 
//VALUES ('$name','$gender','$address',$contact);";
$query = "DELETE FROM `admin_master` WHERE `admin_master`.`id` =".$id;
//echo $query;exit;
$result = mysqli_query($conn, $query);
if($result === true)
{
	echo '<script type="text/javascript">alert("Data Deleted Succesfully"); window.location.href = "index.php";</script>;';
    // header("location: admin_master.php");
}
else
{
  header("location: delete.php");
}
?>