<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin > Statistics </title>

  <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="../css/fonts.css">

  <style>
    /* The bar container */
    .bar-container {
      width: 100%;
      background-color: silver;
      border-radius: 20px;
    }

    /* Individual bars */
    .bar-msg,
    .bar-users,
    .bar-course,
    .bar-sug {
      height: 18px;
    }
  </style>
</head>

<body class="bg-light">

  <?php include('../include/adminheader.inc.php'); ?>

  <main class="container">
    <div class="text-center my-3">
      <h1> Site Statistics </h1>
    </div>

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

          echo "
          <div class='row my-3'>
            <div class='col-md-2'>
              <h5> Messages </h5>
            </div>
            <div class='col-md-9'>
              <div class='bar-container'>
                <div class='bar-msg bg-info rounded-pill' 
                  style='width:" . $i . "%'>
              </div>
            </div>
            </div>
            <div class='col-md-1 text-end'>
              <div>" . $i . " % </div>
            </div>
          </div>";
        } else {
          echo "0 results";
        }
      }
    }
    ?>

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
          echo "
          <div class='row my-3'>
            <div class='col-md-2'>
              <h5> Account users </h5>
            </div>
            <div class='col-md-9'>
              <div class='bar-container'>
                <div class='bar-users bg-success rounded-pill'
                style='width:" . $i . "%'>
                </div>
              </div>
            </div>
            <div class='col-md-1 text-end'>
              <div>" . $i . " % </div>
            </div>
          </div>";
        } else {
          echo "0 results";
        }
      }
    }
    ?>

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

          echo "
          <div class='row my-3'>
            <div class='col-md-2'>
              <h5> Courses bought </h5>
            </div>
            <div class='col-md-9'>
              <div class='bar-container'>
                <div class='bar-course bg-warning rounded-pill'
                style='width:" . $i . "%'>
                </div>
              </div>
            </div>
            <div class='col-md-1 text-end'>
              <div>" . $i . " % </div>
            </div>
          </div>";
        } else {

          echo "0 results";
        }
      }
    }
    ?>
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

          echo "
          <div class='row my-3'>
            <div class='col-md-2'>
              <h5> User suggestions </h5>
            </div>
            <div class='col-md-9'>
              <div class='bar-container'>
                <div class='bar-sug bg-danger rounded-pill'
                style='width:" . $i . "%'>
                </div>
              </div>
            </div>
            <div class='col-md-1 text-end'>
              <div>" . $i . " % </div>
            </div>
          </div>";
        } else {

          echo "0 results";
        }
      }
    }
    ?>

  </main>

</body>

</html>