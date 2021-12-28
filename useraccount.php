<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Learning Zone > My Account </title>

  <!-- Bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/fonts.css">

</head>

<body>
  <!--Navigation bar-->

  <header>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Learning Zone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">

            <li class="nav-item">
              <a class="nav-link" href="userpayment.php">My Courses</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="usermessage.php">Messages</a>
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

  <!-- side menu  -->
  <div class="row text-white mt-3">
    <div class="col-xs-12 col-sm-3 col-md-3 border border-dark">
      <div style="background-color: #5FCF80; margin-right: -12px;">
        <h4 class="fw-bold text-capitalize text-center py-2">
          <?php
          echo  $_SESSION["username"];
          ?>
        </h4>
      </div>
      <br>
      <img src="img/admin/deafaultuser.jpg" class="w-50 d-flex rounded-circle mx-auto py-3">
      <hr>

      <div class="mb-4">
        <a href="usersuggestion.php" class="user-btn btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Suggestions
          <?php
          if ($_SERVER['REQUEST_METHOD'] == "GET") //con establish
          {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "";
            } else {
              echo "";
            }
            $fname = $_SESSION["username"];
            $result = mysqli_query($conn, "select * from reviewtable where username='$fname'")
              or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $i++;
              }
              echo "<span class='badge-main' style='background:red;'>" . $i . "</span>";
              $fname = "";
            }
          }
          ?>
        </a>
        <br>

        <a href="usermessage.php" class="user-btn btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Messages
          <?php
          if ($_SERVER['REQUEST_METHOD'] == "GET") //con establish
          {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "";
            } else {
              echo "";
            }
            $fname = $_SESSION["username"];
            $result = mysqli_query($conn, "select * from contacttable where fullname='$fname'")
              or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $i++;
              }
              echo "<span class='badge-main' style='background:red;'>" . $i . "</span>";
              $fname = "";
            } else {
            }
          }
          ?>
        </a>
        <br>

        <a href="userpayment.php" class="user-btn btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Courses
          <?php
          if ($_SERVER['REQUEST_METHOD'] == "GET") //con establish
          {
            $localhost = "localhost";
            $usernamew = "root";
            $passwordw = "";
            $db = "expdb";
            $conn = mysqli_connect($localhost, $usernamew, $passwordw, $db);
            if (!$conn) {
              echo "";
            } else {
              echo "";
            }
            $fname = $_SESSION["username"];
            $result = mysqli_query($conn, "select * from paymenttable where fname='$fname'")
              or die("FAILED!!" . mysqli_error($conn));
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $i++;
              }
              echo "<span class='badge-main' style='background:red;'>" . $i . "</span>";
              $fname = "";
            } else {
            }
          }
          ?>
        </a>
        <br>

        <a href="userrating.php" class="user-btn btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Rate Our Site</a>

        <a href="logout.php" class="user-btn btn btn btn-outline-dark rounded-pill w-100 fw-bold py-3 m-1">Log Out!</a>

      </div>
    </div>


    <div class="col-xs-12 col-sm-9 col-md-9 container text-center text-dark">

      <div class="user-card bg-white mx-auto m-5 py-5">

        <img src="img/admin/deafaultuser.jpg" class="rounded-circle w-50 mx-auto" alt="User">
        <h1 style='text-transform:capitalize;'>
          <?php echo $_SESSION["username"]; ?>
        </h1>
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
            $fname = $_SESSION["username"];
            $sql = "Select * from exptable where fname='$fname'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo  "
                <h5 class='text-secondary'>
                " . $row["email"] . "
                </h5>";
              }
            }
          }
        }
        ?>
      </div>

    </div>
  </div>


  <!--Footer-->
  <?php include('include/footer.inc.php'); ?>

</body>