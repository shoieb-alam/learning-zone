<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Courses</title>

    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">

    <link rel="stylesheet" href="../css/computer-courses.css">

</head>

<body class="bg-light">

    <header>

        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../home.php">Learning Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../courses.php">CS Courses </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../forums-blogs.php">Forums & Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../religious-corner/religious-corner.php">Islamic Corner</a>
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
                    <form action="../login.php" method="GET">

                        <!----- username -------------->
                        <div class="my-4">
                            <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />
                        </div>


                        <!-- password  -->
                        <div class="my-4">
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
                    <form method="POST" action="../signup.php">

                        <div class="my-4">
                            <!----- username -------------->
                            <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />
                        </div>

                        <!----- mail -------------->
                        <div class="my-4">
                            <input class="form-control" placeholder="E-mail" type="text" autocomplete="off" name="email" />
                        </div>

                        <!----- password -------------->
                        <div class="my-4">
                            <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pass" />
                        </div>

                        <div class="modal-footer d-block">
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
        <h1 class="py-5">Basical Computer Courses</h1>
        <section class="py-5 bg-dark rounded-3">
            <div class="card-deck row justify-content-center">
                <div class="card col-md-5 m-3 py-3">
                    <a href="web-design.html" target="_blank">
                        <img class="card-img-top w-50 mx-auto" src="../img/feature/computer-courses/bacic-computer-course.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Web Design</h4>
                            <p class="card-text">Web design encompasses many different skills and disciplines in the
                                production and maintenance of websites. The different areas of web design include web...
                            </p>

                        </div>
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="graphic-design.html" target="_blank">
                        <img class="card-img-top w-50 mx-auto" src="../img/feature/computer-courses/graphics-course.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Graphics Design</h4>
                            <p class="card-text">Graphic design is the profession and academic discipline whose activity
                                consists in projecting visual communications intended to transmit specific messages
                                to...</p>

                        </div>
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="ms-word.html" target="_blank">
                        <img class="card-img-top w-50 mx-auto" src="https://cdn.worldvectorlogo.com/logos/word-1.svg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">MS Word</h4>
                            <p class="card-text">Microsoft Word is a word processing software developed by Microsoft. It
                                was first released on October 25, 1983, under the name Multi-Tool Word...</p>

                        </div>
                    </a>
                </div>
                <div class="card col-md-5 m-3 py-3">
                    <a href="ms-pp.html" target="_blank">
                        <img class="card-img-top w-50 mx-auto" src="https://cdn.worldvectorlogo.com/logos/powerpoint-2.svg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">MS PowerPoint</h4>
                            <p class="card-text">Microsoft PowerPoint is a presentation program, created by Robert
                                Gaskins and Dennis Austin at a software company named Forethought, Inc...</p>

                        </div>
                    </a>
                </div>
                <div class="card col-md-5 m-3">
                    <a href="ms-excel.html" target="_blank">

                        <img class="card-img-top w-50 mx-auto" src="https://cdn.worldvectorlogo.com/logos/excel-4.svg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">MS Excel</h4>
                            <p class="card-text">Microsoft Excel is a spreadsheet developed by Microsoft for Windows,
                                macOS, Android and iOS. It features calculation, graphing tools, pivot tables...</p>
                        </div>
                    </a>
                </div>
                <div class="card col-md-5 m-3">
                    <a href="typing.html" target="_blank">
                        <img class="card-img-top w-50 mx-auto" src="../img/feature/computer-courses/typing.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Bangali Typing Course</h4>
                            <p class="card-text">Fast and accurate typing is a skill that will serve you well no matter
                                where your career takes you. Though modern technology has resulted in people typing...
                            </p>

                        </div>
                    </a>
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
            <a href="#"><img src="../img/icon/fb.png"></a>
            <a href="#"><img src="../img/icon/insta.png"></a>
            <a href="#"><img src="../img/icon/tt.png"></a>
            <a href="#"><img src="../img/icon/linkedin.png"></a>
            <a href="#"><img src="../img/icon/ytube.png"></a>
          </div>
          <br>
          <br>
          <p class="rights-text">Copyright © 2021 Created By Nur Mohammod & Shoieb Alam All Rights Reserved.</p>
          <br>
          <div class="location d-flex">
            <img src="../img/icon/location.png">
            <p> International Islamic University Chittagong (IIUC)
              <br>
              Kumira, Chittagong-4000
            </p>
          </div>
          <br>
          <p><img src="../img/icon/phone.png"> +88-01745-940121
            <br><img src="../img/icon/mail.png">&nbsp;
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
    <script src="../js/bootstrap5.0.2.bundle.min.js"></script>
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
        $sql = "UPDATE counter SET visit=visit+1 WHERE id = 2";
        $result = mysqli_query($conn, $sql);
    }
}

?>

</html>