<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Zone</title>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap5.0.2.min.css">

  <!-- custom css  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/imagehover.min.css">
  <link rel="stylesheet" href="css/fonts.css">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Font Awesome Icon Library -->
  <script src="https://kit.fontawesome.com/0039da0d3b.js" crossorigin="anonymous"></script>

</head>

<body>

  <header>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Learning Zone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#courses">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feature">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact Us</a>
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


  <main>
    <!-- bannar -->
    <section class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Learning Zone</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">First you Learn, then you remove the 'L'</p>
                <p class="small-text">An easy and organized way to explore the world of coding through the window of our
                  website</p>
                <a href="#contactus" type="button" class="btn btn-secondary">GIVE A SUGGESTION</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ bannar -->


    <!-- About Us -->
    <section id="aboutus" class="pt-4">
      <div class="text-center py-5 my-4">
        <h1>About Us</h1>
        <div class="container">
          <div class="row pt-5 my-5 d-flex justify-content-between align-items-center">
            <div class="col-md-6">
              <img class="w-100" src="img/aboutus.png" alt="">
            </div>
            <div class="col-md-6 about p-5">
              <h2>What you think about us ?</h2>
              <br>
              <p class="text-start">Education is the process of facilitating learning, or the acquisition of knowledge,
                skills, values,
                beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
                directed research.<br> Educational website can include websites that have games, videos or topic
                related resources that act as tools to enhance learning and supplement classroom teaching. These
                websites help make the process of learning entertaining and attractive to the student, especially in
                today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we
                can make learning more easier and in a interesting way.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--/ About Us -->


    <!-- Top Courses -->
    <section id="courses" class="section-padding mb-5">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Top Courses</h2>
            <p>Thousands of computer science courses are at your disposal,
              <br>
              So what are you waiting for!
            </p>
            <hr>
          </div>
        </div>
      </div>
      <div class="container mb-5">
        <div class="row mb-5">
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/angular.jpg" class=" img-responsive" alt="">
              <figcaption>
                <h3>Angular</h3>
                <p>Angular is a TypeScript-based free and open-source web application framework led by the Angular
                  Team
                  at Google and by a community of individuals and corporations.</p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/cisco.jpg" class="img-responsive" alt="">
              <figcaption>
                <h3>CISCO</h3>
                <p>Cisco Systems, Inc. is an American multinational technology conglomerate corporation headquartered
                  in
                  San Jose, California. Integral to the growth of Silicon Valley.
                </p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/reactjs.jpg" class="img-responsive" alt="">
              <figcaption>
                <h3>React</h3>
                <p>React is a free and open-source front-end JavaScript library for building user interfaces or UI
                  components. It is maintained by Facebook and a community of individual developers and companies.</p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/js.jpg" class="img-responsive" alt="">
              <figcaption>
                <h3>JavaScript</h3>
                <p>JavaScript is a programming language that conforms to the ECMAScript specification. JavaScript is
                  high-level, often just-in-time compiled, and multi-paradigm.</p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/nodejs.jpg" class="img-responsive">
              <figcaption>
                <h3>Node.js</h3>
                <p>Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the
                  V8 engine and executes JavaScript code outside a web browser.</p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 g-0">
            <figure class="imghvr-fold-up">
              <img src="img/topcourses/php.jpg" class="img-responsive" alt="">
              <figcaption>
                <h3>PHP</h3>
                <p>PHP is a scripting language geared towards web development. It was originally created by
                  Danish-Canadian programmer Rasmus Lerdorf in 1994. </p>
              </figcaption>
              <a href="#courses"></a>
            </figure>
          </div>
        </div>
        <button id="more" class="mybutton mb-5" style="float: right;"><span><a href="courses.php" target="_blank" style='text-decoration:none;color:white;'>More..</a></span></button>
      </div>
    </section>
    <!-- /Top Courses -->



    <!-- feature -->
    <section id="feature" class="feature mb-5 py-5">
      <div class="feature-swipe pb-5 container">
        <div class="text-center py-5">
          <h2>Features</h2>
          <!-- <hr class="bottom-line text-center"> -->
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 fs-5 justify-content-center">

          <div class="col">
            <a class="no-line" href="courses.php" target="_blank">
              <div class="card h-100 py-4">
                <div class="row my-auto">
                  <div class="col-md-4">
                    <img class="" src="img/feature/cs.png">
                  </div>
                  <p class="col-md-8">Bangali CS Resources</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a class="no-line" href="forums-blogs.php" target="_blank">
              <div class="card h-100 py-4">
                <div class="row my-auto">
                  <div class="col-md-4">
                    <img class="" src="img/feature/fandw.png">
                  </div>
                  <p class="col-md-8">Forums and Blogs</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a class="no-line" href="computer-courses/computer-courses.php" target="_blank">
              <div class="card h-100 py-4">
                <div class="row my-auto mx-auto">
                  <div class="col-md-4">
                    <img src="img/feature/computer-courses.png">
                  </div>
                  <p class="col-md-8">Basical Computer Courses</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a class="no-line" href="religious-corner/religious-corner.php" target="_blank">
              <div class="card h-100 py-4">
                <div class="row my-auto">
                  <div class="col-md-4">
                    <img class="" src="img/feature/islamic.png">
                  </div>
                  <p class="col-md-8">Islamic Corner</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a class="no-line" href="#contactus">
              <div class="card h-100 py-4">
                <div class="row my-auto">
                  <div class="col-md-4 col-sm-12">
                    <img class="" src="img/feature/help.png">
                  </div>
                  <p class="col-md-8">24x7 Online Support</p>
                </div>
              </div>
            </a>
          </div>

          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </section>
    <!--/ feature -->

    <!-- Review Slider -->
    <section class="container text-center pt-3 slider">
      <h1 class="fw-bold my-5">What <span class="colored-text">Students says</span> About us </h1>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner py-5">
          <div class="carousel-item active">
            <div class="clients row row-cols-1 row-cols-lg-3 g-4">
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-1.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">This is one of the good websites where a person can learn from any domain
                      and any field. This is useful and beneficial for the both tutors and the students who are learning
                      from it.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Hamid Hasan</small>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-2.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">I come across this learning platform This course is good for the whom are
                      entering in the programming, I will
                      highly recommend for the those who are entering in programming.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star empty"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Zakaria Foizi </small>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-3.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">Learning Zone is an online learning platform. Students receive guidance from
                      an experienced instructor and have lifetime access to any course.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Clayton Clair</small>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="clients row row-cols-1 row-cols-lg-3 g-4">
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-4.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">Learning Zone is a great option for people who want to build or enhance
                      skills. It
                      has a variety of courses with multiple learning styles and provides lifetime access.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star empty"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Abdur Rahman</small>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-5.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">Learning Zone was an amazing experience for me. Coding is important no
                      matter which branch you are in. It gives
                      you a better understanding about how to approach a problem.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Devyn Sethi</small>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col">
                <div class="border p-3 bg-white h-100">
                  <img src="img/students/user-6.png" class="mx-auto my-3 w-50" alt="...">
                  <div class="card-body">
                    <p class="clients-text">I attended the Python
                      course in Winter 2020 and loved it which made me join the full course. It very helpful in making
                      us understand the concepts. I would certainly recommend this to anyone.</p>
                  </div>
                  <div>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star empty"></i>
                  </div>
                  <br>
                  <small class="text-primary fw-bold">Rylee Phillips</small>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>


    <!--Contact-->

    <section id="contactus" class=" text-center pt-3">
      <div class="csec pt-5">

      </div>
      <div class="container back-contact pt-5">

        <div class="contact-form w-75 rounded-3 bg-white">
          <div class="contact-image">
            <img src="img/contactus.png" alt="rocket_contact" />
          </div>
          <h3 class="m-5">Drop Us a Message</h3>


          <!-- MESSAGE FORM-->
          <form action="contactuspopup.php" class="px-5" method="get">

            <div class="row">
              <div class="col-md-6">
                <div class="form-floating mb-3 form-group">
                  <input type="name" class="form-control" id="floatingInput" placeholder="Your name" name="fullname">
                  <label for="floatingInput">Your Name</label>
                </div>
                <div class="form-floating mb-3 form-group">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3 form-group">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Subject" name="subject">
                  <label for="floatingInput">Subject</label>
                </div>


              </div>
              <div class="col-md-6">
                <div class="form-floating form-group">
                  <textarea class="form-control" placeholder="Leave a Message here" name="message" id="floatingTextarea" style="height: 210px"></textarea>
                  <label for="floatingTextarea">Message</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-success rounded-pill text-white my-5 w-50 fw-bold">Send
                Message</button>
            </div>
          </form>
          <!--/ MESSAGE FORM-->
        </div>

      </div>
    </section>

    <!-- Sliding Information -->
    <marquee class="marqu py-1 text-white fs-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="15">
      <div>“Education is the passport to the future, for tomorrow belongs to those who prepare for it
        today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is
        expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and
        change.”</div>
    </marquee>
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
    $sql = "UPDATE counter SET visit=visit+1 WHERE id = 0";
    $result = mysqli_query($conn, $sql);
  }
}

?>

</html>