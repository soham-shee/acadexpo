<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AcadExpo | Info-Gathering</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.png">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="../assets/css/theme.css" rel="stylesheet" />

    <link href="../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
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
      function redirectPlay() {
        window.location.href="play.php";
      }
    </script>

    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container pt-2"><a class="navbar-brand" href="../index.php">  <img src="../assets/img/white.svg" alt="..." /></a>
          <div class="navbar-nav ms-auto">
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
              <h1 class="display-3 lh-sm">Wanna list an event ?</h1>
            </div>
            <div class="col-md-9 col-xl-5">
              <p class="fs-2">Just fill this and share the info to a billion others like you.</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section>

        <div class="container">
          <form action="code.php" method="POST">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Event Name</label>
                <div class="col-sm-10">
                    <input type="name" name="name_info" class="form-control" id="inputEventName" placeholder="Like BYTE" required>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Source Link</label>
                <div class="col-sm-10">
                    <input type="vid" name="vid_info" class="form-control" id="inputSLink" placeholder="Like nitw.ac.in/ig" required>
                </div>
            </div><br>
            
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input type="location" name="location_info" class="form-control" id="location" placeholder="Offline/Online" required>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" name="date_info" class="form-control" id="time" placeholder="" required>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Time</label>
                <div class="col-sm-10">
                    <input type="name" name="time_info" class="form-control" id="time" placeholder="HH:MM" required>
                </div>
            </div><br>

           

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Event theme</label>
                <div class="col-sm-10">
                    <input type="eventTheme" name="theme_info" class="form-control" id="theme" placeholder="Event theme" required>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Event Type</label>
                <div class="col-sm-10">
                    <select type="select" name="type_info" class="form-control" id="type" placeholder="like- workshop, conference, journals..." required>
                      <option value="workshop">Workshop</option>
                      <option value="conference">Conference</option>
                      <option value="journals">Journals</option>
                    </select>
                </div>
            </div><br>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Institute Name</label>
                <div class="col-sm-10">
                    <input type="noi" name="noi_info" class="form-control" id="noi" placeholder="Like NITW " required>
                </div>
            </div><br>
            
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button name="verify_btn" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
         </form>
        </div>
        <!-- end of .container-->

      </section>
 
      <section class="bg-secondary">

        <div class="container">
          <div class="row">
            <div class="col-xl-3 text-center text-xl-start"><a href="#!"><img class="footer-img me-xl-5 me-3" src="../assets/img/gallery/facebook-line1.svg" alt="fb" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="../assets/img/gallery/linkedin-line1.svg" alt="in" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="../assets/img/gallery/twitter-line1.svg" alt="twitter" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="../assets/img/gallery/instagram-line1.svg" alt="instragram" style="width:20px;height:20px;" /></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
              <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link" href="#!"> T &amp; C </a><a class="text-300 text-decoration-none footer-link ps-4" href="#!">Rules </a>
              </p>
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
              <p class="mb-0">&copy; This site is made by <a class="text-300" href="../index.php"> AcadExpo Grp.</a></p>
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
    <script src="../vendors/@popperjs/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/swiper/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="../assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
  </body>

</html>