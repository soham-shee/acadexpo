<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AcadExpo | Login</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="assets/css/theme.css" rel="stylesheet" />

    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <script>
      function redirectLogin() {
        window.location.href="login.php";
      }
    </script>

    <script>
      function redirectEvent() {
        window.location.href="events.php";
      }
    </script>

    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container pt-2"><a class="navbar-brand" href="index.html">  <img src="assets/img/white.svg" alt="..." /></a>
          <div class="navbar-nav ms-auto">
            <button class="btn btn-secondary" onClick="redirectEvent()">Events</button>
          </div>
        </div>
      </nav>

      <section class="mt-6">

        <script>
          function redirectSignup() {
            window.location.href="signup.php";
          }
        </script>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-5">
              <h1 class="display-3 lh-sm">Login to list the events</h1>
            </div>
            <div class="col-md-9 col-xl-5">
              <p class="fs-2">Just go ahead, and login, so that you can list the upcoming oppurtunities, events, etc.</p>
              
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section>

        <div class="container">
          <form action="pages/code.php" method="POST">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email - Like elonmusk@tesla.com 🚀" required>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
            </div><br>
            
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button name="login_btn" type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
         </form>
        </div>
        <!-- end of .container-->

      </section>

      <section class="mt-5">

        <div class="container">
          <div class="text-center">
            <div class="p-5 bg-primary rounded-3">
              <div class="py-3">
                <h4 class="opacity-50 ls-2 lh-base fw-medium">Wanna take a look on the upcoming events ?</h4>
                <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Start your journey here...</h2>
              </div>
              <div class="flex-center d-flex">
                <button class="btn btn-info" onClick="redirectEvent()">Events <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section class="bg-secondary">

        <div class="container">
          <div class="row">
            <div class="col-xl-3 text-center text-xl-start"><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/facebook-line1.svg" alt="fb" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/linkedin-line1.svg" alt="in" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/twitter-line1.svg" alt="twitter" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/instagram-line1.svg" alt="instragram" style="width:20px;height:20px;" /></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
              
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
              <p class="mb-0">&copy; This site is made by <a class="text-300" href="index.php"> AcadExpo Grp.</a></p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
  </body>

</html>