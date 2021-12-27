<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ratings</title>

  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/fonts.css">

  <style>
    a,
    a:hover {
      text-decoration: none;
      color: black;
    }

    .slider {
      -webkit-appearance: none;
      height: 15px;
      border-radius: 20px;
      background: silver;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background: green;
      cursor: pointer;
    }

    .utitle {
      background-color: #5FCF80;
    }

    #userrating {
      border: 0.5px solid grey;
    }

    #userrating:hover {
      box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }
  </style>
</head>

<body>

  <?php include('include/userheader.inc.php'); ?>

  <main>
    <form action="userratingpopup.php" method="get" id="userrating" class="mx-auto my-4 w-75 rounded-3">

      <div class="utitle">
        <h3 class="fw-bold text-center py-3">USER RATING </h3>
      </div>

      <div class="row mx-5 fs-4 py-4 rounded-3">
        <div class="col-md-2">
          <h5>UserInterface</h5>
        </div>
        <div class="col-md-10">
          <input type="range" min="1" max="10" value="5" class="slider w-100" id="myRange" name="ui">
        </div>
        <br>
        <div class="col-md-2">
          <h5>Performance</h5>
        </div>
        <div class="col-md-10">
          <input type="range" min="1" max="10" value="5" class="slider w-100" id="myRange" name="performance">
        </div>
        <br>
        <div class="col-md-2">
          <h5>Design</h5>
        </div>
        <div class="col-md-10">
          <input type="range" min="1" max="10" value="5" class="slider w-100" id="myRange" name="design">
        </div>
        <br>
        <div class="col-md-2">
          <h5> Usablity </h5>
        </div>
        <div class="col-md-10">
          <input type="range" min="1" max="10" value="5" class="slider w-100" id="myRange" name="usablity">
        </div>
        <br>
        <div class="text-center">
          <button class="btn btn-outline-success btn-lg px-3 text-white fw-bold mt-5" type="submit">Rate Us</button>
        </div>
      </div>
    </form>
  </main>

  <script src="js/bootstrap5.0.2.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
</body>

</html>