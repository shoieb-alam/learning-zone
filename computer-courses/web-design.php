<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design</title>

    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/computer-courses.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>

<body>
    <header>

        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="home.php">Learning Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">CS Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">Forums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#feature">Islamic Corner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Video Lectures</a>
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

    
    <main class="main text-center py-5">
        <h1 class="py-5">Web Design - Basics</h1>
        <section class="container bg-light p-3 rounded-3">
            <div class="">
                <h2>Introduction</h2>
                <div class="row d-flex justify-content-between align-items-center py-3">
                    <div class="col-md-4">
                        <h4>Learn Web Design with HTML, CSS With Live Project in Bangla</h4>
                        <ul class="text-start ms-5 fs-5">
                            <br>
                            <h5>Resources</h5>
                            <li>01. <a href="http://www.w3schools.com/html" target="_blank">W3 School</a> </li>
                            <li>02. <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">MDN Web
                                    Docs</a> </li>
                            <li>03. <a href="https://notepad-plus-plus.org" target="_blank">Notepad++</a> </li>
                        </ul>

                    </div>
                    <div class="col-md-8">
                        <iframe width="590" height="380" src="https://www.youtube.com/embed/HrbwpJaYttU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center py-3">
                    <div class="col-md-4">
                        <h4>Live Web design</h4>
                        <ul class="text-start ms-5 fs-5">
                            <br>
                            <h5>Resources</h5>
                            <li>01. <a href="http://www.w3schools.com/html" target="_blank">W3 School</a> </li>
                            <li>02. <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">MDN Web
                                    Docs</a> </li>
                            <li>03. <a href="https://notepad-plus-plus.org" target="_blank">Notepad++</a> </li>
                        </ul>

                    </div>
                    <div class="col-md-8">
                        <iframe width="590" height="380" src="https://www.youtube.com/embed/YxM587ySa_4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center py-3">
                    <div class="col-md-4">
                        <h4>Chrome DevTools Overview</h4>
                        <ul class="text-start ms-5 fs-5">
                            <br>
                            <h5>Resources</h5>
                            <li>01. <a href="http://www.w3schools.com/html" target="_blank">W3 School</a> </li>
                            <li>02. <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">MDN Web
                                    Docs</a> </li>
                            <li>03. <a href="https://notepad-plus-plus.org" target="_blank">Notepad++</a> </li>
                        </ul>

                    </div>
                    <div class="col-md-8">
                        <iframe width="590" height="380" src="https://www.youtube.com/embed/fBr6ZXCMJmw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--Footer-->
    <?php include('../include/innerfooter.inc.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="../js/bootstrap5.0.2.bundle.min.js"></script>
</body>

</html>