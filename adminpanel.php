<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Learning Zone > Admin </title>

  <!-- Bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/fonts.css">

  <script>
    function display_c() {
      var refresh = 1000; // Refresh rate in milli seconds
      mytime = setTimeout('display_ct()', refresh)
    }

    function display_ct() {
      var today = new Date().toLocaleString();
      document.getElementById('ct').innerHTML = today;
      display_c();
    }
  </script>

</head>

<body class="bg-light" onload=display_ct();>
  <!--Navigation bar-->

  <header>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-secondary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php">Learning Zone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">

            <li class="nav-item">
              <a class="nav-link" href="adpayment.php">Payments</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admessage.php">Messages</a>
            </li>

            <li class="btn-trial nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->

  </header>

  <!--/ Navigation bar--><br><br><br>

  <!-- control panel  -->
  <div class="row text-white mt-3">
    <div class="col-xs-12 col-sm-3 col-md-3 border border-dark">
      <div style="background-color: #5FCF80; margin-right: -12px;">
        <h4 class="fw-bold text-center py-2">
          ADMIN-PANEL
        </h4>
      </div>
      <br>
      <img src="img/admin/admin.jpg" class="w-50 d-flex rounded-circle mx-auto">
      <hr>

      <div class="mb-4">
        <a href="adsuggestion.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Suggestions
          <?php

          $i = 0;
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "Connection error";
            } else {
              echo "";
              $sql = "Select * from reviewtable";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $i++;
                }
                echo "<span class='badge' style='background:red;'>$i</span>";
              } else {

                echo "0 results";
              }
            }
          }
          ?>
        </a>
        <br>

        <a href="admessage.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Messages
          <?php

          $i = 0;
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "Connection error";
            } else {
              echo "";
              $sql = "Select * from contacttable";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $i++;
                }
                echo "<span class='badge' style='background:red;'>$i</span>";
              } else {

                echo "0 results";
              }
            }
          }
          ?>
        </a>
        <br>

        <a href="adpayment.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Payments
          <?php

          $i = 0;
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "Connection error";
            } else {
              echo "";
              $sql = "Select * from paymenttable";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $i++;
                }
                echo "<span class='badge' style='background:red;'>$i</span>";
              } else {
                echo "";
              }
            }
          }
          ?>
        </a>
        <br>

        <a href="adcourse.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Add Courses</a>

        <a href="statistics.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Statistics</a>

        <a href="adrating.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">User Ratings</a>

        <a href="logout.php" class="btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Log Out!</a>

      </div>
    </div>

    <!-- counting number displaying  -->
    <div class="col-xs-12 col-sm-9 col-md-9 container">

      <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-4 container mx-auto">

        <div class="col">
          <div class="card">
            <p class="title">Suggestions</p>
            <p class="count">

              <?php
              $i = 0;
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  echo "";
                  $sql = "Select * from reviewtable";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                    }
                    echo $i;
                  } else {
                    echo "0 results";
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <p class="title">Messages</p>
            <p class="count">

              <?php
              $i = 0;
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  echo "";
                  $sql = "Select * from contacttable";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                    }
                    echo $i;
                  } else {
                    echo "0";
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <p class="title">Courses Bought</p>
            <p class="count">

              <?php
              $i = 0;
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  echo "";
                  $sql = "Select * from paymenttable";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                    }
                    echo $i;
                  } else {
                    echo "0";
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <p class="title">Account Users</p>
            <p class="count">

              <?php
              $i = 0;
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  echo "";
                  $sql = "Select * from exptable";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                    }
                    echo $i;
                  } else {
                    echo "0";
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>
      </div>

      <!-- server time  -->
      <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1 container mx-auto">
        <div class="col">
          <div class="card">
            <p class="title">Server Time</p>
            <h3 id='ct' class="servercount fw-bold text-center">
            </h3>
          </div>
        </div>
      </div>

      <!-- visited counts  -->
      <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-3 container mx-auto d-flex justify-content-center">
        <!-- Home page visited -->
        <div class="col">
          <div class="card h-75">
            <p class="title">Home Visits</p>
            <p class="count">

              <?php
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  $sql = "select visit from counter where id=0";
                  if ($result = mysqli_query($conn, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                      printf("%s \n", $row[0]);
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <!--    courses page visit-->
        <div class="col">
          <div class="card h-75">
            <p class="title">Courses Visits</p>
            <p class="count">

              <?php
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  $sql = "select visit from counter where id=1";
                  if ($result = mysqli_query($conn, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                      printf("%s \n", $row[0]);
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <!--    basical courses page visits-->
        <div class="col">
          <div class="card h-75">
            <p class="title">Basical Courses Visits</p>
            <p class="count">

              <?php
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  $sql = "select visit from counter where id=2";
                  if ($result = mysqli_query($conn, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                      printf("%s \n", $row[0]);
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <!-- forums and blogs page visited -->
        <div class="col">
          <div class="card h-75">
            <p class="title">Forums & Blogs Visits</p>
            <p class="count">

              <?php
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  $sql = "select visit from counter where id=3";
                  if ($result = mysqli_query($conn, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                      printf("%s \n", $row[0]);
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

        <!-- Islamic corner page visited -->
        <div class="col">
          <div class="card h-75">
            <p class="title">Islamic Corner Visits</p>
            <p class="count">

              <?php
              if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $localhost = "localhost";
                $usernamew = "root";
                $passwordw = "";
                $db = "expdb";
                $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
                if (!$conn) {
                  echo "Connection error";
                } else {
                  $sql = "select visit from counter where id=4";
                  if ($result = mysqli_query($conn, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                      printf("%s \n", $row[0]);
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }
                }
              }
              ?>
            </p>
          </div>
        </div>

      </div>

      <div class="loader mx-auto mb-5"></div>
    </div>
  </div>

  <!--Footer-->
  <footer class="bg-dark text-white">
    <div class="p-5">
      <div class="row">
        <div class="col-md-7">
          <h1 class="py-3">LEARNING ZONE</h1>
          <div class="social-media">
            <a href="#"><img src="img/icon/fb.png"></a>
            <a href="#"><img src="img/icon/insta.png"></a>
            <a href="#"><img src="img/icon/tt.png"></a>
            <a href="#"><img src="img/icon/linkedin.png"></a>
            <a href="#"><img src="img/icon/ytube.png"></a>
          </div>
          <br>
          <br>
          <p class="rights-text">Copyright © 2021 Created By Nur Mohammod & Shoieb Alam All Rights Reserved.</p>
          <br>
          <div class="location d-flex">
            <img src="img/icon/location.png">
            <p> International Islamic University Chittagong (IIUC)
              <br>
              Kumira, Chittagong-4000
            </p>
          </div>
          <br>
          <p><img src="img/icon/phone.png"> +88-01745-940121
            <br><img src="img/icon/mail.png">&nbsp;
            learningzone@gmail.com
          </p>
        </div>
        <div class="col-md-5 mt-3">
          <h2 class="mt-5 ">Give Us Suggestions</h2>
          <div class="border"></div>
          <br>
          <p>Your valuable suggestions are always welcomed.</p>
          <form action="review.php" method="get">
            <div class="mb-3 w-75 d-grid">

              <input class="form-control me-4 form-control-lg" name="username" type="text" placeholder="Username" aria-label="Username">

              <input class="form-control my-2 form-control-lg" name="comment" type="text" placeholder="Enter Your Suggestion" aria-label="Username">
              <button name="submit" type="submit" class="btn btn-outline-success fw-bold text-white">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/bootstrap5.0.2.bundle.min.js"></script>
</body>