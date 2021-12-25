<?php
require('connect.inc.php');

$getid = $_GET['id'];

$sql = "SELECT id, coursename, description, url1 FROM coursetable WHERE id=$getid";
$result = mysqli_query($conn, $sql);
?>

<?php
$course = mysqli_fetch_array($result);
$coursename = $course['coursename'];
$description = $course['description'];
echo $coursename;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $coursename ?>
    </title>

    <link rel="stylesheet" href="./courses/video-youtube.css">

</head>

<body>

    <h3 class="heading"> <?php echo $coursename ?> Course</h3>
    <div class="container">

        <div class="main-iframe">
            <div class="iframe">
                <iframe src="https://www.youtube.com/embed/I11nduRNeT8?rel=0&modestbranding=1&showinfo=0&autoplay=1" allowfullscreen></iframe>
                <h3 class="title"> 01. Introduction </h3>
            </div>
        </div>

        <div class="iframe-list">

            <div class="vid active">
                <iframe src="https://www.youtube.com/embed/Z6v1vjIY_PY?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class="title">02. Client Side Vs Server Side Scripting Language</h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/gZxVF76CHdc?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class="title" title>03. PHP Setup Bangla</h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/8IeDMgXTeaQ?rel=0&modestbranding=1&showinfo=0" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                <h3 class=" title">04. PHP Variable And Syntax </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/GaBudbPbOlY?rel=0&modestbranding=1&showinfo=0" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                <h3 class=" title">05. PHP Comment </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/N-vfOTLmKYM?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class=" title">06. PHP Constants </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/VILuoe4dcnw?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class=" title">07. Echo Vs Print </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/ek15sBTquKo?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class=" title">08. Data Types </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/1_TqGAfPQRM?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class=" title">09. Var_dump </h3>
            </div>

            <div class="vid">
                <iframe src="https://www.youtube.com/embed/cS3jK0wzHc0?rel=0&modestbranding=1&showinfo=0" allowfullscreen></iframe>
                <h3 class=" title">10. PHP Printf </h3>
            </div>

        </div>

    </div>
    <script src="./courses/video-youtube.js"></script>
</body>

</html>