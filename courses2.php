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



  <!--Modal box-->

  <!-- login modal -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6 class="text-center my-2">Login to start your Session</h6>
          <form action="login.php" method="GET">

            <div class="my-4">
              <!----- username -------------->
              <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />
            </div>


            <!-- password  -->
            <div class="my-4">

              <!----- password -------------->
              <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pwd" />

            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe" />
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="modal-footer d-block">
              <button type="submit" class="btn btn-success container-fluid">Log in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ login modal  -->

  <!-- signin modal  -->
  <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="signin" aria-hidden="true">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header text-white">
          <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6 class="text-center my-2">Sign up to start your Session</h6>
          <form method="POST" action="signup.php">
            <div class="my-4">
              <!-- <label class="form-label">Email Address</label> -->
              <!-- <input type="email" class="form-control" id="loginid" name="email" placeholder="Email Address" /> -->

              <!----- username -------------->
              <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />

            </div>
            <div class="my-4">
              <!-- <label class="form-label">Email Address</label> -->
              <!-- <input type="text" class="form-control" id="username" name="fname" autocomplete="off" placeholder="Username" /> -->

              <!----- mail -------------->
              <input class="form-control" placeholder="E-mail" type="text" autocomplete="off" name="email" />


            </div>
            <div class="my-4">
              <!-- <label class="form-label">Password</label> -->
              <!-- <input type="password" class="form-control" id="password" name="pass" placeholder="Password" /> -->

              <!----- password -------------->
              <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pass" />

            </div>

            <div class="modal-footer d-block">
              <!-- <p class="float-start">Not yet account <a href="#signin">Sign Up</a></p> -->
              <button type="submit" class="btn btn-success container-fluid">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ signin modal  -->

  <!--/ Modal box-->

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
          <form action="payment.php" method="POST">

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

  <!--/ Modal box-->



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
                      <small class='text-warning fw-bold'> 4.6 </small>
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