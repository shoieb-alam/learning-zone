<?php
require('connect.inc.php');

$getid = $_GET['id'];

$sql = "SELECT * FROM coursetable WHERE id=$getid";
$result = mysqli_query($conn, $sql);
?>

<?php
$course = mysqli_fetch_array($result);
$coursename = $course['coursename'];
$url1 = $course['url1'];
$title1 = $course['title1'];
$url2 = $course['url2'];
$title2 = $course['title2'];
$url3 = $course['url3'];
$title3 = $course['title3'];
$url4 = $course['url4'];
$title4 = $course['title4'];
$url5 = $course['url5'];
$title5 = $course['title5'];
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

    <link rel="stylesheet" href="css/video.css">

</head>

<body>

    <h3 class="heading"> <?php echo $coursename ?> Course</h3>
    <div class="container">

        <div class="main-iframe">
            <div class="iframe">
                <iframe src="<?php echo $url1 ?>" allowfullscreen></iframe>
                <h3 class="title"> 01. <?php echo $title1 ?> </h3>
            </div>
        </div>

        <div class="iframe-list">

            <div class="vid active">
                <iframe src="<?php echo $url1 ?>" allowfullscreen></iframe>
                <h3 class="title">01. <?php echo $title1 ?> </h3>
            </div>

            <div class="vid">
                <iframe src="<?php echo $url2 ?>" allowfullscreen></iframe>
                <h3 class="title" title>02. <?php echo $title2 ?></h3>
            </div>
      
            <div class="vid">
                <iframe src="<?php echo $url3 ?>" allowfullscreen></iframe>
                <h3 class="title" title>03. <?php echo $title3 ?></h3>
            </div>

            <div class="vid">
                <iframe src="<?php echo $url4 ?>" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                <h3 class=" title">04. <?php echo $title4 ?> </h3>
            </div>

            <div class="vid">
                <iframe src="<?php echo $url5 ?>" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                <h3 class=" title">05. <?php echo $title5 ?> </h3>
            </div>

        </div>

    </div>
    <script src="js/video.js"></script>
</body>

</html>