<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>skillz_final</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Article-Cards.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-50.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/DA_About.css">
    <link rel="stylesheet" href="assets/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="assets/css/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3-1.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-7.css">
</head>

<body style="background-color: rgb(241,241,241);">
    <nav class="navbar navbar-light navbar-expand-md fixed-top shadow navigation-clean" style="margin-right: 58px;width: 1913px;height: 85px;margin-top: 2px;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php" style="margin-left: 15px;margin-top: -6px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="width: 878px;margin-right: 500px;">
                <ul class="nav navbar-nav ml-auto">
                <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                                    {
                                             ?>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation" style="margin-left: 0px;"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="webinars-1.html">Webinars</a></li>
                    <li class="nav-item dropdown" style="margin-left: 19px;"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-user-alt"></i></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="login.html">Logout</a></div>
                    </li>
                </ul>
                <?php } else { header('location:login.html');} ?>
        </div>
        </div>
    </nav>
    <div class="shadow" style="height: 595px;margin-top: 120px;background-color: #ffffff;"><img data-aos="fade-up" style="margin-top: 164px;margin-left: 99px;height: 241px;width: 359px;" src="assets/img/Doodle/Dv1.jpg">
        <h1 class="text-center" data-aos="fade-down" data-aos-delay="600" style="margin-top: 22px;margin-left: 641px;color: #696767;font-family: 'Titillium Web', sans-serif;font-weight: bold;width: 278px;height: 69px;font-size: 53px;letter-spacing: 4px;"><span style="text-decoration: underline;">LATEST</span></h1><img data-aos="fade-up" data-aos-delay="100" style="margin-top: 164px;margin-left: 508px;height: 241px;width: 359px;" src="assets/img/Photoshop/ed1.jpg"><a href="Editing_vid/editing.html"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 232.5px;margin-left: 637.5px;"></i></a><a href="Arts_vid/doodle/vid1.html"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 232.5px;margin-left: 237.5px;"></i></a>
        <h1
            data-aos="fade-up" data-aos-delay="400" style="margin-top: 412px;margin-left: 508px;width: 357px;font-family: 'Abril Fatface', cursive;color: #ff471a;font-size: 32px;">Editing</h1>
            <h1 data-aos="fade-up" data-aos-delay="300" style="margin-top: 411px;margin-left: 100px;width: 357px;font-family: 'Abril Fatface', cursive;color: #ff471a;font-size: 32px;">Doodling</h1><a class="text-center brow-cat" id="browse" href="browse.html" style="margin-top: 548.5px;margin-left: 699px;height: 34px;width: 180px;font-size: 25px;letter-spacing: 2px;font-family: 'Titillium Web', sans-serif;font-weight: bold;"><i class="fa fa-th-list"></i>&nbsp;more skills</a></div>
    <div
        class="shadow footer-clean" style="margin-top: 36px;height: 298px;">
        <footer data-aos="fade-up" data-aos-duration="350">
            <div class="container" style="margin-left: 140px;margin-top: 31px;">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">Services</h3>
                        <ul>
                            <li><a href="#" style="font-size: 19px;">Web design</a></li>
                            <li><a href="#" style="font-size: 19px;">Development</a></li>
                            <li><a href="#" style="font-size: 19px;">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item" style="font-size: 24px;">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">About</h3>
                        <ul>
                            <li style="font-size: 19px;"><a href="#">Company</a></li>
                            <li style="font-size: 19px;"><a href="#">Team</a></li>
                            <li style="font-size: 19px;"><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">Careers</h3>
                        <ul>
                            <li style="font-size: 18px;"><a href="#">Job openings</a></li>
                            <li style="font-size: 19px;"><a href="#">Employee success</a></li>
                            <li style="font-size: 19px;"><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a data-aos="fade-up" data-aos-duration="350" href="#"><i class="icon ion-social-facebook"></i></a><a data-aos="fade-up" data-aos-duration="350" data-aos-delay="100" href="#"><i class="icon ion-social-twitter"></i></a><a data-aos="fade-up"
                            data-aos-duration="350" data-aos-delay="200" href="#"><i class="icon ion-social-snapchat"></i></a><a data-aos="fade-up" data-aos-duration="350" data-aos-delay="300" href="#"><i class="icon ion-social-instagram"></i></a>
                        <p data-aos="fade-up"
                            data-aos-duration="350" data-aos-delay="400" class="copyright" style="color: #ff471a;font-weight: bold;">S K I L L Z © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="assets/js/Animated-Type-Heading.js"></script>
        <script src="assets/js/Dynamically-Queue-Videos.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="assets/js/Media-Slider-Bootstrap-3.js"></script>
        <script src="assets/js/password.js"></script>
        <script src="assets/js/Swipe-Slider-7.js"></script>
</body>

</html>