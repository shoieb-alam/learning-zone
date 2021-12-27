<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Learning Zone > Courses </title>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <!-- custom css  -->
  <link rel="stylesheet" href="css/courses.css">
  <link rel="stylesheet" href="css/imagehover.min.css">
  <link rel="stylesheet" href="css/fonts.css">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Font Awesome Icon Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <script>
    function showMessage(btnId) {

      document.getElementById("couselect").value = btnId;
      document.getElementById("couselect").readOnly = true;

    }
  </script>

</head>

<body>


  <header>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php">Learning Zone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="computer-courses/computer-courses.php">Basic Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forums-blogs.php">Forums & Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="religious-corner/religious-corner.php">Islamic Corner</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-target="#login" data-bs-toggle="modal">Log in</a>
            </li>
            <li class="btn-trial nav-item">
              <a class="nav-link" href="#" data-bs-target="#signin" data-bs-toggle="modal">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
  </header>

  <!-- Login/Sign Up Modal -->

  <?php include('include/loginmodal.inc.php'); ?>


  <!-- Payment Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="paymentModalLabel">Payment Gateway</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3 m-3">
          <p> Please fill following deatils to procced </p>
          <form action="paymentpopup.php" method="POST">

            <div class="mb-3">
              <input class="form-control" id="loginid" type="text" placeholder="Username" name="fname">
            </div>

            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" id="loginpsw" autocomplete="off" name="pass">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Transaction ID (Bkash/Nagad)" id="loginpsw" type="text" autocomplete="off" name="cred" min-length=10>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control text-capitalize" name="coursename" id="couselect" type="text" autocomplete="off" name="pwd">
            </div>
            <hr>
            <div class="d-grid">
              <button type="submit" class="btn btn-success">Buy this Course</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- / Payment Modal -->

  <!-- Courses  -->

  <main class="main bg-light text-center">
    <div class="m-5">
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

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
            echo "";
            $sql = "SELECT * FROM coursetable";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($course = mysqli_fetch_assoc($result)) {
                echo "        
                  <div class='col'>
                    <div class='card h-100'>
                    <img src='img/courses/" . $course["image"] . "' class='card-img-top h-50'/>
                    <div class='card-body'>
                      <h2 class='card-title'>" . $course["coursename"] . "</h2>
                      <p class='card-text'>
                        " . $course["description"] . "
                      </p>
                    </div>
                    <div>
                      <small class='text-warning fw-bold'> 4.5 </small>
                      <span class='fa fa-star checked'></span>
                      <span class='fa fa-star checked'></span>
                      <span class='fa fa-star checked'></span>
                      <span class='fa fa-star checked'></span>
                      <span class='fa fa-star-half-o checked'></span>
                    </div>
                    <br>
                    <button type='submit' id=" . $course["coursename"] . " onClick='showMessage(this.id)' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#paymentModal'        data-bs-whatever='@mdo'>Buy the course</button>
                    </div>
                    </div>
                  ";
              }
            }
          }
        }
        ?>

      </div>
    </div>
  </main>


  <!--Footer-->
  <?php include('include/footer.inc.php'); ?>

</body>

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
    $sql = "UPDATE counter SET visit=visit+1 WHERE id = 1";
    $result = mysqli_query($conn, $sql);
  }
}

?>

</html>