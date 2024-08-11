<?php
include 'config.php';
?>
<?php
    if(isset($_GET['id']))
    {
        $user_id=$_GET['id'];
        $sql = "SELECT * FROM `admin_master` WHERE `id` = ".$user_id;
        $run_sql= mysqli_query($conn,$sql);
     //echo $query;
        if(mysqli_num_rows($run_sql) > 0)
        {
            $user = mysqli_fetch_assoc($run_sql);
             ?>
            <div class="container-fluid">

    <form action="update.php" method="POST">
        <input type="hidden" name="uid" value="<?php echo $_GET['id'];?>"><br>
        <div class="input-group">
            <span class="input-group-text">Username</span>
            <input type="text" name="username"  aria-label="First name" class="form-control" value="<?php echo $user['username'];?>" require>
        </div><br>
        <div class="input-group">
            <span class="input-group-text">Password </span>
            <input type="text" name="password" aria-label="Password" class="form-control" value="<?php echo $user['password'];?>" require
            >
            </div><br>
        <a href="update.php"><button type="submit" class="btn btn-primary">Update</button></a>
    </form>

</div>
<?php
            }
        }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
