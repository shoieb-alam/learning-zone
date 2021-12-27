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
    <link rel="stylesheet" href="../css/fonts.css">

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

    <!-- Login/Sign Up Modal -->

    <?php include('../include/loginmodal.inc.php'); ?>

    <!-- Main page  -->
    <main class="container text-center my-5">
        <h1 class="py-5">Basical Computer Courses</h1>
        <section class="py-5 bg-dark rounded-3">
            <div class="card-deck row justify-content-center">
                <div class="card col-md-5 m-3 py-3">
                    <a href="web-design.php" target="_blank">
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
                    <a href="graphic-design.php" target="_blank">
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
    <?php include('../include/innerfooter.inc.php'); ?>
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