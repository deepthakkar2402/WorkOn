<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="core.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        height: 130vh !important;
      }
    }

    .select {
      height: 45px;
      width: 100%;
      outline: 0;
      border: 1px solid #b1b1b1;
      border-radius: 5px;
      padding: 5px;
      box-sizing: border-box;
      transition: all 0.5s;
      cursor: pointer;
      color: lightslategray;
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
      border-color: black;
    }

    .gradient-custom-2 {
      background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));
    }

    .form-control {
      color: black;
    }

    .form-outline .form-control {
      padding: 0.33em 0.75em;
      transition: all .2s linear;
    }

    .bg-indigo {
      background-color: #4835d4;
    }

    @media (min-width: 992px) {
      .card-registration-2 .bg-indigo {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
      }
    }

    @media (max-width: 991px) {
      .card-registration-2 .bg-indigo {
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
      }
    }
  </style>
</head>

<body>
  <form action="e.php" method="POST" enctype="multipart/form-data">
    <section class="h-100 h-custom gradient-custom-2">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="p-5">
                      <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" id="first_name" class="form-control form-control-lg" required />
                            <label class="form-label" for="first_name">First Name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" id="last_name" class="form-control form-control-lg" required />
                            <label class="form-label" for="last_name">Last Name</label>
                          </div>
                        </div>
                        <input type="hidden" name="wor_name" id="wor_name" />
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="number" id="form3Examplev3" name="wor_contact"
                              class="form-control form-control-lg" pattern="^\d{10}$" required />
                            <label class="form-label" for="form3Examplev3">Contact Number</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <select name="wor_gender" class="select">
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="number" name="wor_exp" class="form-control form-control-lg" required />
                            <label class="form-label">Your Experience</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" name="wor_email" class="form-control form-control-lg" required
                              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                            <label class="form-label">Email</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" name="wor_password" class="form-control form-control-lg" required />
                            <label class="form-label">Password</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                          <select name="specialities" class="select">
                            <option value="">Select Skills</option>
                            <?php
                            $query = "SELECT * FROM skill_list";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                              }
                            } else {
                              echo '<option value="">Skill not available</option>';
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="mb-4 pb-2">
                        <div class="form-outline">
                          <textarea name="address" class="form-control form-control-lg" required></textarea>
                          <label class="form-label">Address</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                          <select id="city" name="city" class="select">
                            <option value="">Select city</option>
                            <?php
                            $query = "SELECT * FROM city_master";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row['city_id'] . '">' . $row['city_name'] . '</option>';
                              }
                            } else {
                              echo '<option value="">city not available</option>';
                            }
                            ?>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select id="area" name="area" class="select">
                            <option value="">Select city first</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-lg-6 bg-indigo text-white">
                    <div class="p-5">
                      <h3 class="fw-normal mb-5">Your Details</h3>

                      <div class="row">
                        <div class="col-md-5 mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="number" min="50" max="300" name="visit_charges"
                              class="form-control form-control-lg" required />
                            <label class="form-label">Visit Charges</label>
                          </div>
                        </div>
                        <div class="col-md-7 mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" name="wor_aadhaar" class="form-control form-control-lg" required />
                            <label class="form-label">Aadhaar Card Number</label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-4 pb-2">
                        <label class="form-label" style="color:white">Upload Aadhaar Card Photo</label>
                        <input type="file" name="identity_doc" class="form-control form-control-lg" />
                      </div>

                      <div class="mb-4 pb-2">
                        <label class="form-label" style="color:white">Upload Your Photo</label>
                        <input type="file" name="file_image" class="form-control form-control-lg" />
                      </div>

                      <div class="mb-4 pb-2">
                        <div class="form-outline">
                          <textarea class="form-control form-control-lg" name="description" required
                            style="color:white"></textarea>
                          <label class="form-label" style="color:white">Description</label>
                        </div>
                      </div>

                      <input type="submit" class="btn btn-outline-primary" />
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#city').on('change', function () {
        var cityID = $(this).val();
        if (cityID) {
          $.ajax({
            type: 'POST',
            url: 'ajaxpro.php',
            data: 'city_id=' + cityID,
            success: function (html) {
              $('#area').html('<option value="">Select city first</option>');
              $('#area').html(html);
            }
          });
        } else {
          $('#area').html('<option value="">Select city first</option>');
        }
      });

      // Combine first and last name into 'wor_name' before form submit
      $("form").on("submit", function () {
        var fname = $("#first_name").val().trim();
        var lname = $("#last_name").val().trim();
        $("#wor_name").val(fname + " " + lname);
      });
    });
  </script>
</body>

</html>
