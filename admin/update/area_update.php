<?php
$id=$_GET['id'];
$city_id=$_GET['city_id'];
$name=$_GET['name'];
//  echo 'hey'; 
$query = "SELECT * FROM city_master"; 
   include '../config.php';
                           $result = mysqli_query($conn,$query); 
                        //    echo $query;exit;
                       if($result !== FALSE){ 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <form method="post" action="area_update1.php">
        <div class="container mt-5">
            <h1 style="text-align: center;">Update Area</h1>
            <div class="mb-3">
                <input type="hidden" name="area_id" class="form-control" value="<?php echo $id; ?>">
                <label for="exampleFormControlInput1" class="form-label">Update Area Name</label>
                <input type="text" name="area_name" class="form-control" Value="<?php echo $name; ?>"><br>

                <select id="city_id" class="form-select" name="city_id" style="color:black;">
                    <!-- <option value="">Select city</option> -->
                   <?php
                                                while($row = mysqli_fetch_array($result)){  ?>
                                                    
                                                    <option value="<?= $row['city_id'];?>" <?php if($row['city_id']==$city_id){echo "selected";} ?>><?= $row['city_name'];?></option>
                                           <?php } 
                                            }else{ 
                                                echo '<option value="">city not available</option>'; 
                                            } 
                                            ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary mb-3" value="Update">
            </div>
        </div>
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>