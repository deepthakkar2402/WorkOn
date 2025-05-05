<?php include 'config.php';
session_start();
if(!isset($_SESSION['wor_logged_in']))
{
    header("location: login.php");
} 
?>
<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WorkOn a Home Maintenance & Service Category | Home</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php';?>
    <?php
    if(isset($_SESSION['wor_email']))
    {
        $user_id=$_SESSION['wor_email'];
        $sql = "SELECT * FROM `worker_master` WHERE `wor_email` = '".$user_id."'";
        $run_sql= mysqli_query($conn,$sql);
        if($run_sql !== FALSE)
        {
            $user = mysqli_fetch_assoc($run_sql); 

            // Split full name into first and last
            $fullName = $user['wor_name'];
            $nameParts = explode(' ', trim($fullName), 2);
            $firstName = $nameParts[0];
            $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
    ?>
    <div class="container py-lg-5">
        <div class="grid contact-grids row">
            <div class="col">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 160px;">
                                            <img src="<?php echo $user['wor_profile'];?>" alt="profile"
                                                class="d-flex justify-content-center align-items-center rounded"
                                                style="height: 140px;width: 224px; background-color: rgb(233, 236, 239);" />
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 ml-5 text-nowrap"><?php echo $user['wor_email'];?></h4>
                                            <p class="mb-0 ml-5"><?php echo $user['wor_email'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item mr-1">
                                        <a class="tablinks nav-link" onclick="openCity(event, 'London')" id="defaultOpen">
                                            <h5>Profile</h5>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <form class="form" novalidate="">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <label class="form-control"><?php echo htmlspecialchars($firstName); ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <label class="form-control"><?php echo htmlspecialchars($lastName); ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <label class="form-control"><?php echo $user['wor_gender'];?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <label class="form-control"><?php echo $user['wor_email'];?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea class="form-control" readonly><?php echo $user['wor_address'];?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <label class="form-control"><?php echo $user['wor_area'];?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <div class="form-group">
                                                                <label>About</label>
                                                                <label class="form-control"><?php echo $user['description'];?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="text-left">
                                                    <a onclick="myFunction()">
                                                        <button class="btn btn-block btn-secondary" style="color:white;margin-left:20px;">
                                                            <i class="fa fa-sign-out"></i>
                                                            <span>Logout</span>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <div class="col d-flex justify-content-end">
                                                        <a href="edit_profile.php?edit_email=<?php echo $user['wor_email'];?>"
                                                            class="btn btn-primary"
                                                            style="background:#f45d01;border:0px;">Edit Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    } 
    ?>
    <?php include 'footer.php';?>

    <script>
        function myFunction() {
            let text = "Are you sure";
            if (confirm(text) == true) {
                window.location.href = "logout.php";
            } else {
                window.close();
            }
        }
    </script>
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<script src="assets/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: { items: 1, nav: false },
                480: { items: 1, nav: false },
                667: { items: 1, nav: true },
                1000: { items: 1, nav: true }
            }
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.owl-two').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: { items: 1, nav: false },
                480: { items: 1, nav: false },
                667: { items: 1, nav: false },
                1000: { items: 1, nav: false }
            }
        })
    });
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>
