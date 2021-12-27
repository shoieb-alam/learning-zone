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
          <div class="text-center">
            <a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-target="#signin" data-bs-toggle="modal">Don't have an account? Sign Up</a>
          </div>
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

              <!----- username -------------->
              <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname" />

            </div>
            <div class="my-4">
              
              <!----- mail -------------->
              <input class="form-control" placeholder="E-mail" type="text" autocomplete="off" name="email" />


            </div>
            <div class="my-4">
              
              <!----- password -------------->
              <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pass" />

            </div>

            <div class="modal-footer d-block">

              <button type="submit" class="btn btn-success container-fluid">Sign Up</button>
            </div>
          </form>
          <div class="text-center">
            <a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-target="#login" data-bs-toggle="modal">Already have an account? Log In</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ signin modal  -->

  <!--/ Modal box-->