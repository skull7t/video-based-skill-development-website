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
<body style="background-color: #f1f1f1;">
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
                    <li class="nav-item" role="presentation" style="margin-left: 20px;"><a class="nav-link" href="latest.php">Latest</a></li>
                    <li class="nav-item dropdown" style="margin-left: 13px;"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-user-alt"></i></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Logout</a></div>
                    </li>
                </ul>
                <?php } else { header('location:login.html');} ?>
        </div>
        </div>
    </nav>
    <div class="shadow" style="height: 588px;margin-top: 120px;background-color: #ffffff;">
        <h1 class="text-center" data-aos="fade-down" data-aos-delay="400" style="margin-top: 23px;margin-left: 628px;color: #696767;font-family: 'Titillium Web', sans-serif;font-weight: bold;width: 299px;height: 69px;font-size: 53px;letter-spacing: 4px;"><span style="text-decoration: underline;">WEBINARS</span></h1>
        <div class="border rounded cards" data-aos="fade-up" id="cards" style="width: 334px;margin-top: 122px;margin-left: 30px;height: 390px;background-color: #000000;"><img style="width: 333px;height: 175px;" src="assets/img/webn1.jpg">
            <h1 style="margin-top: 214px;width: 334px;font-size: 13px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 126px;"><strong>&nbsp;ATTENDEES WILL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>How
                photography and conservation are naturally connected?&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Can photography really change people’s behaviors and have a positive effect on environmental issues?&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Is photography really the best way to raise funds for conservation issues?I&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Is it ok to bait an animal for a photo?<br><br></h1>
            <h1
                class="text-center" id="register" style="margin-top: 395px;width: 334px;font-size: 20px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 25px;"><a href="http://cmsvatavaran.org/webinar5.php">REGISTER HERE</a></h1>
                <h1 class="text-left" style="margin-top: 338px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 25px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4 July 2020&nbsp; &nbsp; 4.30 – 6.00 pm<br><br></h1>
                <h1 class="text-center" style="margin-top: 172px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 44px;"><strong>Webinar on Photography for Conservation by CMS Vatavaran</strong><br><br></h1>
        </div>
        <div class="border rounded shadow-none cards" data-aos="fade-up" data-aos-delay="100" id="cards" style="width: 334px;margin-top: 122px;margin-left: 396px;height: 390px;background-color: #000000;"><img style="width: 333px;height: 175px;" src="assets/img/wp2.jpg">
            <h1 style="margin-top: 220px;width: 334px;font-size: 13px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 113px;">Many middle and high school directors have discovered the effectiveness of singing in just two well-conceived voice parts, but finding texts and topics that are suitable for teen singers can be a challenge. Come sing along in this free webinar
                as Andy Beck and Krista Hart lead you through 2-part treble choral repertoire recommended for all ages!<br></h1>
            <h1 class="text-center" id="register" style="margin-top: 395px;width: 334px;font-size: 20px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 25px;"><a href="https://www.alfred.com/events/2-part-choral-music-not-just-for-kids/">REGISTER HERE</a></h1>
            <h1 class="text-left" style="margin-top: 338px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 25px;"><strong>November 14, 2020&nbsp;&nbsp;8:00 AM – 9:00 AM PST</strong><br><br></h1>
            <h1 class="text-center" style="margin-top: 172px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 44px;"><strong>2-Part Choral Music: Not Just for Kids!</strong><br><br></h1>
        </div>
        <div class="border rounded cards" data-aos="fade-up" data-aos-delay="200" id="cards" style="width: 334px;margin-top: 122px;margin-left: 759px;height: 390px;background-color: #000000;"><img style="width: 333px;height: 175px;" src="assets/img/0915_worcester-tech-2-1000x664.jpg">
            <h1 style="margin-top: 220px;width: 334px;font-size: 13px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 113px;"><strong>&nbsp;ATTENDEES WILL LEARN :</strong><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;.&nbsp; &nbsp;The basic functions
                of tires.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; .&nbsp; Tire construction and&nbsp; components.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; .&nbsp; Tire engineering and design.<br><br></h1>
            <h1 class="text-center" id="register" style="margin-top: 395px;width: 334px;font-size: 20px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ffffff;height: 25px;"><a href="https://register.gotowebinar.com/register/1970544049192278795">REGISTER HERE</a></h1>
            <h1 class="text-left" style="margin-top: 338px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 25px;">Wed, Oct 7, 2020 10:30 PM - 11:30 PM IST<br><br></h1>
            <h1 class="text-center" style="margin-top: 172px;width: 334px;font-size: 18px;font-family: 'Titillium Web', sans-serif;font-weight: bold;color: #ff471a;height: 44px;"><br><strong>The Art &amp; Science of Tire Design</strong><br><br></h1>
        </div>
    </div>
    <div class="shadow footer-clean" style="margin-top: 36px;height: 298px;">
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