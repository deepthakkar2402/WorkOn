<?php

//$id = $_POST['uid'];
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
$conn = mysqli_connect('localhost','root','');
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
$q = "SELECT * FROM admin_master WHERE username= '".$username."'";
$result = mysqli_query($conn, $q);
if($row = mysqli_fetch_assoc($result))
{
	echo "Data Already exist";
}
else
{
	$query = "INSERT INTO `admin_master` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')";
	//echo $query;exit;
	$result1 = mysqli_query($conn, $query);
	if($result1 === true)
	{
		echo '<script type="text/javascript">alert("Data Inserted Succesfully"); window.location.href = "../index.php";</script>;';
    	// header("location: ../index.php");
	}
	else	
	{
  		header("location: admintable.php");
	}
}
?>