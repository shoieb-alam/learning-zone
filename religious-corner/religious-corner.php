<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Corner</title>

    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap5.0.2.min.css">

    <link rel="stylesheet" href="../css/computer-courses.css">
    <link rel="stylesheet" href="../css/fonts.css">

    <!-- Bengali font  -->
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">

</head>

<body class="bg-religious">

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
                            <a class="nav-link" href="../computer-courses/computer-courses.php">Basic Courses </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../courses.php">CS Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../forums-blogs.php">Forums & Blogs </a>
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


    <!-- Main Page  -->
    <main class="container text-center my-5">
        <div class="religious-logo d-flex justify-content-center">

            <img class="mx-3" src="../img/feature/religious-logo.png" alt="">
            <h1 class="py-5">Islamic Corner</h1>
        </div>
        <section class="religious-home-conatainer py-5 rounded-3">
            <div class="card-deck row justify-content-center">

                <div class="card col-md-5 m-3 py-3 ">
                    <div class="">
                        <a href="../religious-corner/sirat.php" target="_blank">
                            <img class="card-img-top mx-auto" src="../img/feature/religious/sirat.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">আমরা কেন সীরাহ পাঠ করবো ? </h4>
                                <p class="card-text">সীরাত বলতে বোঝায় মুহাম্মদ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম-এর জীবনে
                                    ও যুগে সংঘটিত সমস্ত ঘটনার বিবরণ ও ইতিহাস।
                                    তিনি যা বলেছেন, যা করেছেন এবং যা-কিছুর অনুমোদন দিয়েছেন বা নির্দেশ....</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <div class="my-auto">
                        <a href="../religious-corner/tajweed.html" target="_blank">
                            <img class="card-img-top w-75" src="../img/feature/religious/sahih-quran.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">সহীহ পদ্ধতিতে কোরআন শিক্ষা</h4>
                                <p class="card-text">তাজবীদের গুরুত্বপূর্ণ নিয়ম-কানুন সহকারে কুরআন মাজীদ শিক্ষা ইকলাব
                                    ইদগাম ইজহার সহ তাজবীদের নানান বিষয়ের আলোচনা, সূরা কাহফের প্রথম ১০ আয়াত বাংলা
                                    উচ্চারণ সহ...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <a href="https://islamqa.info/bn/" target="_blank">
                        <img class="card-img-top mx-auto" src="../img/feature/religious/islamqa.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"> ইসলামঃ জিজ্ঞাসা ও জবাব </h4>
                            <p class="card-text">ইসলাম জিজ্ঞাসা ও জবাব ওয়েবসাইট একটি দাওয়াতি, গবেষণাধর্মী ও শিক্ষামূলক
                                ওয়েবসাইট। এ ওয়েব সাইটের লক্ষ্য হচ্ছে– মুসলিম কিংবা অমুসলিম প্রশ্নকারীর পক্ষ থেকে ইসলাম
                                সম্পর্কে প্রাপ্ত প্রশ্নাবলির...</p>
                        </div>
                    </a>
                </div>

                <div class="card col-md-5 m-3 py-3 ">
                    <div class="">
                        <a href="../religious-corner/karbala.php" target="_blank">
                            <img class="card-img-top mx-auto" src="../img/feature/religious/karbala.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">কারবালা : প্রতিরোধের প্রথম দৃষ্টান্ত </h4>
                                <p class="card-text">হযরাত হাসানাইন (হাসান ও হোসাইন) রাযি.-এর পদক্ষেপ ছিল আল্লাহ তাআলার
                                    নিদর্শনাবলীর অন্তর্ভুক্ত। নবী কারীম সাল্লাল্লাহু আলাইহি ওয়াসাল্লামের সঙ্গে আল্লাহ
                                    তাআলা যে বিশেষ বিশেষ...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <a href="../religious-corner/quran-with-spelling.html" target="_blank">
                        <img class="card-img-top mx-auto" src="../img/feature/religious/quran.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"> বানান করে কুরআন শিক্ষা </h4>
                            <p class="card-text"> আমাদের দৈনন্দিন জীবনে কোরআন শরীফের শিক্ষা সদা স্বীকার্য। আমরা আমাদের
                                মনের প্রশান্তি ও মহান আল্লাহর রহমতের জন্যে কোরআন তেলাওয়াত করে থাকি। সহীহ্ তা’লীমুল
                                কুরআন ফাউন্ডেশন...</p>
                        </div>
                    </a>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <a href="https://islamhouse.com/bn/" target="_blank">
                        <img class="card-img-top mx-auto" src="../img/feature/religious/islamhouse.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"> বিশ্বের সকল ভাষায় ইসলাম </h4>
                            <p class="card-text">জ্ঞান অর্জনই মানুষের মর্যাদার পার্থক্য নির্ণয় করে দেয়। এ জ্ঞানের
                                মর্যাদা দিতে গিয়েই আল্লাহ তাআলা ফেরেশতাদের উপর হজরত আদম আলাইহিস সালামের শ্রেষ্ঠত্ব দান
                                করেছেন। বিশ্বের সকল ভাষায় ইসলাম...</p>
                        </div>
                    </a>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <a href="../religious-corner/quranic-language.html" target="_blank">
                        <img class="card-img-top w-75 mx-auto" src="../img/feature/religious/arabic-language.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"> কুরআনিক অ্যারাবিক ল্যাঙ্গুয়েজ কোর্স </h4>
                            <p class="card-text">আপনি অনেক এবাদত করছেন, অনেক কুরআন পড়ছেন, অনেক নফল সলাত পড়ছেন, অনেক
                                তাসবীহ করছেন।
                                আপনি কুরআন আরবীতে পড়ছেন ঠিকই কিন্তু বুঝতে পারছেন না আরবীর মানে...</p>
                        </div>
                    </a>
                </div>

                <div class="card col-md-5 m-3 py-3">
                    <a href="https://www.hadithbd.com/" target="_blank">
                        <img class="card-img-top mx-auto" src="../img/feature/religious/bn-hadith.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"> বাংলা হাদিস </h4>
                            <p class="card-text">হাদীস শরীফ মুসলিম মিল্লাতের এক অমূল্য সম্পদ, ইসলামী শরীয়তের অন্যতম
                                অপরিহার্য উৎস এবং ইসলামী জীবন বিধানের অন্যতম মূলভিত্তি। পবিত্র জীবনচরিত, কর্মনীতি ও
                                আদর্শ এবং তাঁর কথা ও কাজ...</p>
                        </div>
                    </a>
                </div>

                <div class="card col-md-5 m-3 py-3 ">
                    <div class="">
                        <a href="../religious-corner/khutba.php" target="_blank">
                            <img class="card-img-top mx-auto" src="../img/feature/religious/khutba.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">জুমু’আর খুতবা ও আমাদের অবহেলা </h4>
                                <p class="card-text">শুক্রবার, জুমু’আর সালাতের জন্য মসজিদে অন্য দিনের চেয়ে অধিক মুসল্লির
                                    আগমন। ইমাম সাহেব বাংলায় খুৎবা দিচ্ছেন, সবাই মনোযোগের সাথে শুনছেন। প্রথমে বিভিন্ন
                                    হালাল-হারামের বিষয় নিয়ে আলোচনা...</p>
                            </div>
                        </a>
                    </div>
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
        $sql = "UPDATE counter SET visit=visit+1 WHERE id = 4";
        $result = mysqli_query($conn, $sql);
    }
}

?>

</html>