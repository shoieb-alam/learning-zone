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
    <link rel="stylesheet" href="css/fonts.css">

</head>

<body class="bg-light">

    <header>

        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Learning Zone</a>
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

    <!-- Login/Sign Up Modal -->

    <?php include('include/loginmodal.inc.php'); ?>

    <!-- Main page  -->
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
        $sql = "UPDATE counter SET visit=visit+1 WHERE id = 3";
        $result = mysqli_query($conn, $sql);
    }
}

?>

</html>