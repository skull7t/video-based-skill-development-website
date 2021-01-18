<?php
session_start();
?>
<!DOCTYPE html>
<html style="background-color: #f2f2f2;">

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

<body style="background-color: #f1f1f1;">
    <header>
        <nav class="navbar navbar-light navbar-expand-md fixed-top shadow navigation-clean" style="margin-right: 58px;width: 1913px;height: 85px;">
            <div class="container-fluid"><a class="navbar-brand" href="#" style="margin-left: 15px;margin-top: -6px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1" style="width: 878px;margin-right: 500px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="webinars-1.php">Webinars</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="latest.php">Latest</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-user-alt"></i></a>
                            <div class="dropdown-menu" role="menu">
                                <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                                {
                                    ?>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                                <?php } else { ?>
                                <a class="dropdown-item" href="register.html">Register</a>
                                <a class="dropdown-item" href="login.html">Login</a>
                                <a class="dropdown-item" href="Admin\login.html">Admin Login</a>
                                <?php } ?>
                            </div>
                        </li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="shadow" data-aos="fade-down" style="height: 598px;background-color: #ffffff;margin-top: 120px;color: rgb(254,254,255);">
        <h1 class="text-center" style="width: 799px;height: 333px;margin: 2px;margin-left: -2px;color: #696767;font-size: 45px;font-family: 'Abril Fatface', cursive;margin-top: 138px;margin-bottom: 75px;position: absolute;">&nbsp;<i class="fa fa-quote-left" data-aos="fade-down" data-aos-delay="200"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The future belongs to those who&nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; learn new skills and combine&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; them in a creative ways.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="browse.html"  id="#explore"><button class="button" type="button" data-hover="SURE!"><span>WANNA SEE MORE?</span></button></a>&nbsp;
            &nbsp; &nbsp; &nbsp;&nbsp;</h1><img data-aos="fade-down" style="margin-left: 775px;margin-top: 0px;height: 598px;width: 741px;" src="assets/img/adult-blur-business-camera-108148.jpg"></div>
    <div class="shadow" data-aos="fade-up" data-aos-duration="350" id="explore" style="height: 1482px;background-color: #ffffff;margin-top: 36px;color: #696767;margin-left: 0px;">
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 523px;margin-top: 170px;font-family: 'Abril Fatface', cursive;color: #ff471a;font-weight: bold;">ARTS</h1>
        <h1 class="text-center" style="width: 500px;margin-left: 523px;margin-top: 16px;font-family: 'Titillium Web', sans-serif;color: #696767;height: 54px;font-size: 52px;letter-spacing: 4px;font-weight: bold;"><span style="text-decoration: underline;">EXPLORE</span></h1>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 1012px;margin-top: 627px;font-family: 'Abril Fatface', cursive;color: #ff471a;font-weight: bold;">MUSIC</h1>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 523px;margin-top: 1044px;font-family: 'Abril Fatface', cursive;color: #ff471a;font-weight: bold;">PHOTOGRAPHY</h1>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 523px;margin-top: 237px;font-family: 'Abril Fatface', cursive;height: 194px;font-size: 38px;">Explore your creativity and expand your artistic skills with Skillz<a class="btn btn-primary-outline" href="Arts_vid/arts.html" role="button">Get Started &rarr;</a></h1>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 1012px;margin-top: 694px;font-family: 'Abril Fatface', cursive;height: 194px;font-size: 38px;">Get inspired to learn more about music with these Skillz classes.<a class="btn btn-primary-outline" href="Music_vid/music.html" role="button">Get Started &rarr;</a></h1>
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="350" style="width: 500px;margin-left: 523px;margin-top: 1114px;font-family: 'Abril Fatface', cursive;height: 194px;font-size: 38px;">&nbsp;Dive into Skillz classes,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to learn variety of photography techniques.<br><a class="btn btn-primary-outline" href="photgraphy_vid/Photography.html" role="button">Get Started &rarr;</a></h1><img style="margin-top: 154px;height: 315px;width: 461px;margin-left: 38px;" src="assets/img/photo-of-woman-in-front-of-painting-3547625.jpg">
        <img
            style="margin-top: 580px;height: 315px;width: 461px;margin-left: 532px;" src="assets/img/music2.png"><img style="margin-top: 1008px;height: 315px;width: 461px;margin-left: 38px;" src="assets/img/p3.jpg"></div>
    <div class="shadow" data-aos="fade-up" data-aos-duration="350" style="height: 982px;background-color: #ffffff;margin-top: 36px;letter-spacing: 4px;font-weight: bold;">
        <h1 class="text-center" style="width: 500px;margin-left: 517px;margin-top: 16px;color: #696767;font-size: 52px;"><strong><span style="text-decoration: underline;">TRENDING</span></strong></h1><img data-aos="fade-up" data-aos-duration="350" data-aos-delay="150" style="margin-top: 578px;height: 315px;width: 461px;margin-left: 38px;" src="assets/img/mobile%20photography/mv2.jpg"><a href="photgraphy_vid/mobile_photography/vid1.php"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 687.5px;margin-left: 212.5px;"></i></a>
        <h1
            style="width: 461px;margin-left: 38px;margin-top: 895px;font-size: 20px;font-weight: bold;height: 55px;">6 Mobile Photography Tips you must know<br><br></h1><img data-aos="fade-up" data-aos-duration="350" style="margin-top: 139px;height: 315px;width: 461px;margin-left: 38px;" src="assets/img/Doodle/Dv1.jpg"><a href="Arts_vid/doodle/vid1.php"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 248.5px;margin-left: 212.5px;"></i></a>
            <h1 style="width: 461px;margin-left: 38px;margin-top: 458px;font-size: 20px;height: 65px;font-weight: bold;">Doodle for Beginners | Draw with Me Step-by-Step<br><br><br></h1><img data-aos="fade-up" data-aos-duration="350" data-aos-delay="50" style="margin-top: 139px;height: 315px;width: 461px;margin-left: 533px;" src="assets/img/instrumental/gv1.jpg"><a href="Music_vid/Instrumental/vid1.php"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 248.5px;margin-left: 707.5px;"></i></a>
            <h1
                style="width: 461px;margin-left: 533px;margin-top: 458px;font-size: 20px;height: 64px;font-weight: bold;">Guitar Lesson 1 - Absolute Beginner? Start Here!<br><br><br></h1><img data-aos="fade-up" data-aos-duration="350" data-aos-delay="100" style="margin-top: 139px;height: 315px;width: 461px;margin-left: 1029px;" src="assets/img/dslr%20photography/pv1.jpg"><a href="photgraphy_vid/dslr_photography/vid.php"><i class="fa fa-play-circle-o" style="font-size: 93px;margin-top: 248.5px;margin-left: 1203.5px;"></i></a>
                <h1
                    style="width: 461px;margin-left: 1029px;margin-top: 458px;font-size: 20px;font-weight: bold;height: 68px;">How to Use a DSLR Camera? A Beginner's Guide<br><br><br></h1>
                    <h1 data-aos="fade-right" data-aos-duration="350" style="width: 506px;margin-left: 640px;margin-top: 702px;height: 161px;font-size: 50px;"><a class="btn btn-primary-outline" href="new.html" role="button">Browse &rarr;</a></h1>
    </div>
    <div class="shadow footer-clean" style="margin-top: 36px;height: 298px;">
        <footer data-aos="fade-up" data-aos-duration="350">
            <div class="container" style="margin-left: 140px;margin-top: 31px;">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">Contact us</h3>
                        <ul>
                            <li><a href="contact_queries.html" style="font-size: 19px;"><strong>Queries</strong></a></li>
                            <li><a href="#" style="font-size: 19px;">Phone no.</a></li>
                            <li><a href="#" style="font-size: 19px;">Email</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item" style="font-size: 24px;">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">About</h3>
                        <ul>
                            <li style="font-size: 19px;"><a href="About_us.html"><strong>Company</strong></a></li>
                            <li style="font-size: 19px;"><a href="#">Team</a></li>
                            <li style="font-size: 19px;"><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="color: #ff471a;font-weight: bold;font-size: 24px;">Careers</h3>
                        <ul>
                            <li style="font-size: 18px;"><a href="#"><strong>Job openings</strong></a></li>
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