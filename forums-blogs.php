<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums and Blogs</title>

    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

    <link rel="stylesheet" href="css/computer-courses.css">

</head>

<body class="bg-light">

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
                            <a class="nav-link" href="courses.php">CS Courses </a>
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
    </header>
    <!--/ Navigation bar-->



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
                            <!-- <label class="form-label">Email Address</label> -->
                            <!-- <input type="text" class="form-control" id="loginid" name="fname" autocomplete="off" placeholder="Username" /> -->

                            <!----- username -------------->
                            <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />

                        </div>


                        <!-- password  -->
                        <div class="my-4">
                            <!-- <label class="form-label">Password</label> -->
                            <!-- <input type="password" class="form-control" id="password" name="pwd" placeholder="Password" /> -->

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


    <main class="container text-center my-5">
        <h1 class="py-5">Forums and Blogs</h1>
        <section class="py-5 bg-dark rounded-3">
            <div class="card-deck row justify-content-center">
                <div class="card col-md-5 m-3 py-3 ">
                    <div class="">
                        <a href="https://bn.quora.com/topic/সফ্টওয়্যার-ইঞ্জিনিয়ারিং" target="_blank">
                            <img class="card-img-top w-75 mx-auto" src="img/feature/fourms-blogs/quora.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://hellohasan.com/category/computer-science-it-industry/" target="_blank">
                            <img class="card-img-top" src="img/feature/fourms-blogs/hasan.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="https://forum.projanmo.com/forum48.html" target="_blank">
                        <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/projonmo.png" alt="Card image cap">
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://jakir.me/category/programming/" target="_blank">
                            <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/zakir.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://www.shafaetsplanet.com/" target="_blank">
                            <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/shafaeyt.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="https://sattacademy.com/forum/question-category/programming/" target="_blank">
                        <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/sat-academy.png" alt="Card image cap">
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="http://shoshikkha.com/" target="_blank">
                        <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/shoshikkha.png" alt="Card image cap">
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://www.techtunes.io/jacket" target="_blank">
                            <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/tech-tunes.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="https://with.dibakar.me/" target="_blank">
                        <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/dibakar.png" alt="Card image cap">
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://www.webcoachbd.com/forum" target="_blank">
                            <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/webcouch.png" alt="Card image cap">
                        </a>
                    </div>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="http://subeen.com/" target="_blank">
                        <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/subeen.png" alt="Card image cap">
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="https://hasin.me/" target="_blank">
                            <img class="card-img-top mx-auto" src="img/feature/fourms-blogs/hasin.png" alt="Card image cap">
                        </a>
                    </div>
                </div>

            </div>
        </section>
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
        $sql = "UPDATE counter SET visit=visit+1 WHERE id = 3";
        $result = mysqli_query($conn, $sql);
    }
}

?>

</html>