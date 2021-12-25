<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin > Ratings </title>

  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/fonts.css">

  <style>
    .checked {
      color: orange;
    }

    /* The bar container */
    .bar-container {
      width: 100%;
      background-color: silver;
      border-radius: 20px;
    }

    /* Individual bars */
    .bar-ui,
    .bar-perfromace,
    .bar-design,
    .bar-usablity {
      height: 18px;
    }
  </style>

</head>

<body class="bg-light">

  <header>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="home.php">Learning Zone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="btn-trial nav-item">
              <a class="nav-link rounded-3" href="adminpanel.php">Admin Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->

  </header>

  <main class="container">
    <div class="text-center my-3">
      <h1> Authenticated Users Rating </h1>
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
        $result = mysqli_query($conn, 'SELECT COUNT(ui) AS num_rating FROM ratingtable');
        $row = mysqli_fetch_assoc($result);
        echo "
        <div class='text-white p-3 rounded-3' style='background: #5FCF80;'>
          <h3> Users Rating </h3>
            <div class='py-2 fs-3'>
              <span class='fa fa-star checked'></span>
              <span class='fa fa-star checked'></span>
              <span class='fa fa-star checked'></span>
              <span class='fa fa-star checked'></span>
              <span class='fa fa-star'></span>
            </div>
            <div>
              <h6> " . $row['num_rating'] . " User reviewed this site.</h6>
            </div>
        </div>";

        // UserInterface part
        $result = mysqli_query($conn, 'SELECT AVG(ui) AS ui_avg FROM ratingtable');
        $row = mysqli_fetch_assoc($result);
        $row['ui_avg'] = $row['ui_avg'] * 10;
        echo "
        <div class='row my-3'>
          <div class='col-md-2'>
            <h5> UserInterface </h5>
          </div>
          <div class='col-md-9'>
            <div class='bar-container'>
              <div class='bar-ui bg-info rounded-pill'
                style='width: " . $row['ui_avg'] . "%'>
              </div>
            </div>
          </div>
          <div class='col-md-1 text-end'>
            <div>" . round($row['ui_avg'], 1) . " % </div>
          </div>
        </div>";

        // Performance part 
        $result = mysqli_query($conn, 'SELECT AVG(performance) AS per_avg FROM ratingtable');
        $row = mysqli_fetch_assoc($result);
        $row['per_avg'] = $row['per_avg'] * 10;
        echo "
        <div class='row my-3'>
          <div class='col-md-2'>
            <h5> Performance </h5>
          </div>
          <div class='col-md-9'>
            <div class='bar-container'>
              <div class='bar-perfromace bg-success rounded-pill'
                style='width:" . $row['per_avg'] . "%'>
              </div>
            </div>
          </div>
          <div class='col-md-1 text-end'>
            <div>" . round($row['per_avg'], 1) . " % </div>
          </div>
        </div>";

        // Design part 
        $result = mysqli_query($conn, 'SELECT AVG(design) AS des_avg FROM ratingtable');
        $row = mysqli_fetch_assoc($result);
        $row['des_avg'] = $row['des_avg'] * 10;
        echo "
        <div class='row my-3'>
          <div class='col-md-2'>
            <h5> Design </h5>
          </div>
          <div class='col-md-9'>
            <div class='bar-container'>
              <div class='bar-design bg-danger rounded-pill' 
                style='width:" . $row['des_avg'] . "%'>
              </div>
            </div>
          </div>
          <div class='col-md-1 text-end'>
            <div>" . round($row['des_avg'], 1)  . " % </div>
          </div>
        </div>";

        // Usability part 
        $result = mysqli_query($conn, 'SELECT AVG(usablity) AS us_avg FROM ratingtable');
        $row = mysqli_fetch_assoc($result);
        $row['us_avg'] = $row['us_avg'] * 10;
        echo "
        <div class='row my-3'>
          <div class='col-md-2'>
            <h5> Usablity </h5>
          </div>
          <div class='col-md-9'>
            <div class='bar-container'>
              <div class='bar-usablity bg-warning rounded-pill'
                style='width:" . $row['us_avg'] . "%'>
              </div>
            </div>
          </div>
          <div class='col-md-1 text-end'>
            <div>" . round($row['us_avg'], 1) . " % </div>
          </div>
        </div>";
      }
    }
    ?>

  </main>

</body>

</html>