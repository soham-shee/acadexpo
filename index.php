<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AcadExpo | Academic Log</title>


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
      function redirectEvents() {
        window.location.href="events.php";
      }
    </script>

    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container pt-2"><a class="navbar-brand" href="index.php"> <img src="assets/img/white.svg" alt="..." /></a>
          <div class="navbar-nav ms-auto">
            <button class="btn btn-secondary" onClick="redirectEvents()">Events</button>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="mt-6">

        <script>
          function redirectSignup() {
            window.location.href="signup.php";
          }
        </script>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-5">
              <h1 class="display-3 lh-sm">Welcome to AcadExpo</h1>
            </div>
            <div class="col-md-9 col-xl-5">
              <p class="fs-2">Help us list more and more academic opputunities for comming days.</p>
              <button class="btn btn-primary mt-3" onClick="redirectSignup()">Join the List</button>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section>

        <div class="container">
          <h1 class="display-10 fw-semi-bold">Academic Events : </h1>

          <div class="row mb-4 mt-6">
            <div class="">
              <div class="height-10 features-items">
                
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-5">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-5">Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-5">Name of the Institute</th>
              
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        $conn = mysqli_connect("sql113.epizy.com","epiz_33775708","aKvE7bZITRl","epiz_33775708_dashboard");
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT name, date, noi FROM events_info";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "</td><div class='d-flex'>
                                      <div class='d-flex flex-column justify-content-center'>
                                        <h6 class='mb-0 text'><td>" . $row["name"] . "</td></h6>
                                      </div>

                                      <div class='d-flex flex-column justify-content-center'>
                                        <h6 class='mb-0 text'><td>" . $row["date"] . "</h6>
                                      </div>
                                      
                                    </div><td>"
                        . $row["noi"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { echo "0 results"; }
                        $conn->close();
                        ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section class="mt-5">

        <div class="container">
          <div class="text-center">
            <div class="p-5 bg-primary rounded-3">
              <div class="py-3">
                <h4 class="opacity-50 ls-2 lh-base fw-medium">Want to check all events ?</h4>
                <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Check out the lastest events.</h2>
              </div>
              <div class="flex-center d-flex">
                <button class="btn btn-info" onClick="redirectEvents()">Get Started <span class="fas fa-arrow-right"></span></button>
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