<?php

session_start();
include "dbConnection.php";

// echo $_SESSION['Id'];
// echo $_SESSION['FName'];
// echo $_SESSION['LName'];
// echo $_SESSION['Email'];
$total_course_query = "SELECT * FROM `course` ";
$getres = mysqli_query($conn, $total_course_query);

$totalcourse = mysqli_num_rows($getres);

$total_course_query = "SELECT * FROM `student` ";
$getres = mysqli_query($conn, $total_course_query);

$totalstudent = mysqli_num_rows($getres);

$total_Instructor_query = "SELECT * FROM `teacher` ";

$getins = mysqli_query($conn, $total_Instructor_query);
$totalinstructor = mysqli_num_rows($getins);


// session_destroy();
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Learning</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<style>
    .button_design {
        border: none;
        /* border-radius: 5px; */
        height: 35px;
        background-color: rgb(255, 255, 255);

        margin: 5px;

    }

    .button_design:hover {
        background-color: rgb(251, 255, 16);
        box-shadow: 5px 10px rgb(99, 91, 22);
        border-radius: 5px;
    }
</style>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number"><?php echo $_SESSION['FName'] . "  " . $_SESSION['LName']; ?></p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name"><?php echo $_SESSION['Email'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div style="padding:10px" class="logo">
                                <h2>CholoSikhi</h2>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">

                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        

                                   

                                       
                                        <li>
                                            <form method="post">

                                                <button name="sign" class="button_design" type="submit">LOGIN</button>
                                            </form>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/slider_bg_1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>Better Education For  </span><br>A Better World</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">eLearning empowers millions of learners to unlock their potential and become   <br> changemakers to build a new world we all cherish for.</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 offset-xl-2">
                            <div class="slider-content slider-content-2 text-center">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>Find A Top Course </span><br>That Fits Your Life</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">We provide all kinds of courses from self development <br>to courses that'll help climb higher in your career .</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>Take The Next </span><br>Big Step Now</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Join Now To Complete Your Personal And  <br> Professional growth with E-Learning.</p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">admit now</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- about start -->
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section mb-30">
                        <h1>Welcome To Our E-Learning</h1>
                        <p><b>Build new skills for that “this is my year” feeling with courses, certificates, and degrees from world-class universities and companies.</b></p>
                        <p>Learn like yourself, build confidence!</p>
                        <!-- <button class="theme-btn blue-bg-border mt-20"><span class="btn-text">admit now</span></button> -->
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30">
                        <img src="img/about/about-right.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row pt-65">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Scholarship Facility</h3>
                            <span>01</span>
                        </div>
                        <div class="feature-text">
                            <p> The majority of our programmes are available  with options for  generous scholarships</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Advance Advisor</h3>
                            <span>02</span>
                        </div>
                        <div class="feature-text">
                            <p>Our Advisors Are Well Advanced In Their Career And Are Well Trained About How To Deal With Different Types Of Learners.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>IT & Careers</h3>
                            <span>03</span>
                        </div>
                        <div class="feature-text">
                            <p>While the demands of IT & Technological topics are increasing we gave special attention toward these courses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-100 pb-70" style="background-image: url(img/courses/courses_bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Our Latest Courses</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Our best three running courses. They will help you increasing your skills.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row courses-active">



                    <?php
                    $query = "Select * from course Limit 3";
                    $rs = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <div class="col-xl-12">
                            <div class="courses-wrapper course-radius-none mb-30">
                                <div class="courses-thumb">
                                <a href="course_details.html"><img style="height: 250px; width: 370px;" src="image/<?php echo $row['C_image']?>" alt=""></a>
                                </div>
                                <div class="courses-author">
                                    <img src="img/courses/coursesauthor1.png" alt="">
                                </div>
                                <div class="course-main-content clearfix">
                                    <div class="courses-content">
                                        <div class="courses-category-name">
                                            <span>
                                                Business
                                            </span>
                                        </div>
                                        <div class="courses-heading">
                                            <h1><?php echo $row["C_Name"] ?></h1>
                                        </div>
                                        <div style="height: 100px" class="courses-para">
                                            <p><?php echo $row["C_Des"] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-wrapper-bottom clearfix">
                                    <div class="courses-icon d-flex f-left">
                                        <div class="courses-single-icon">
                                            <span class="ti-user"></span>
                                            <span class="user-number">35</span>
                                        </div>
                                        <div class="courses-single-icon">
                                            <span class="ti-heart"></span>
                                            <span class="user-number">35</span>
                                        </div>
                                    </div>
                                    <div class="courses-button f-right">
                                        <a href="login.php">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- team start -->
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Experience Advisors</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">We place a high value on quality of instruction so we can provide our clients with the most effective training experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">

                    <?php
                    $query = "Select * from teacher limit 4";
                    $rs = mysqli_query($conn, $query);  //return obj
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div   class="team-wrapper mb-30">
                                <div  class="team-thumb">
                                    <img  src="image/<?php echo $row['T_image'] ?>" alt="">
                                    <!-- <img  src="image/rsz_11orpon.jpg" alt=""> -->
                                </div>
                                <div class="team-social-info text-center">
                                    <div class="team-social-para">
                                        <p><?php echo $row['T_Des']?></p>
                                    </div>
                                    <div class="team-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-teacher-info text-center">
                                    <h1><?php echo $row['T_Name']?></h1>
                                    <h2><?php echo $row['T_Type']?></h2>
                                </div>
                            </div>
                        </div>

                    <?php


                    }


                    ?>






                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- events start -->

    <!-- events end -->
    <!-- testimonials start -->
    <div class="testimonilas-area pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">What Our Students Say</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">We Care For You is a full service concierge company dedicated to helping our community </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonilas-list">
                <div class="row testimonilas-active">

                    <?php

                    $query = "select * from feedback";
                    $rs = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>

                        <div class="col-xl-12">
                            <div class="testimonilas-wrapper mb-110">
                                <div class="testimonilas-heading d-flex">
                                    <div class="testimonilas-author-thumb">
                                        <img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
                                    </div>
                                    <div class="testimonilas-author-title">
                                        <h1><?php echo $row['S_Name'] ?></h1>
                                        <h2><?php echo $row['S_Type'] ?></h2>
                                    </div>
                                </div>
                                <div style="height: 100px" class="testimonilas-para">
                                    <p><?php echo $row['F_Des'] ?></p>
                                </div>

                            </div>
                        </div>


                    <?php
                    }

                    ?>



                    <!-- <div class="col-xl-12">
                        <div class="testimonilas-wrapper mb-110">
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1>Lisa McClanahan</h1>
                                    <h2>CSE Student</h2>
                                </div>
                            </div>
                            <div class="testimonilas-para">
                                <p>But also the leap into electronic type reman see essentially unchanged. It was popul arised thew with the release of letraset sheets.</p>
                            </div>
                            <div class="testimonilas-rating">
                                <ul>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
    <!-- testimonials end -->
    <!-- video start -->
    <div class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-wrapper text-center">
                        <div class="video-content">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=i8nLrvcNcrg"><img src="img/video/play_icon.png" alt=""></a>
                            <span>Watch Our Latest Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video end -->
    <!-- counter start -->
    <div class="counter-area">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon1.png" alt="">
                        <span class="counter"><?php echo $totalstudent; ?></span>
                        <h3>Students</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon2.png" alt="">
                        <span class="counter"><?php echo $totalcourse; ?></span>
                        <h3>Total Courses</h3>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon4.png" alt="">
                        <span class="counter"><?php echo $totalinstructor ?></span>
                        <h3>Total Instructors </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- latest_news start -->

    <!-- latest_blog end -->
    <!-- brand start -->

    <!-- brand end -->
    <!-- subscribe start -->

    <!-- subscribe end -->
    <!-- footer start -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo">
                                    <img src="img/logo/logo_2.png" alt="">
                                </div>
                                <div class="footer-para">
                                    <p >we realized it is high time for a change in the process of learning.  From “for some” to “for all.” By opening the platform for online learning, eLearning empowers millions of learners to unlock their potential and become changemakers. </p>
                                </div>
                                <div class="footer-socila-icon">
                                    <span>Follow Us</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Quick Links</h1>
                                </div>
                                <div class="footer-menu clearfix">
                                    <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Condition</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Consultation</a></li>
                                        <li><a href="#">Team Member</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Who we are</a></li>
                                        <li><a href="#">Get a Quote</a></li>
                                        <li><a href="#">Recent Post</a></li>
                                        <li><a href="#">Who we are</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 d-lg-none d-xl-block col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Recent Post</h1>
                                </div>
                                <div class="recent-post d-flex mb-25">
                                    <div class="recent-post-thumb">
                                        <img src="img/post/recent_post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-text">
                                        <p>New Medical Courses Arriving Soon!</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">01 march 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post d-flex">
                                    <div class="recent-post-thumb">
                                        <img src="img/post/recent_post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Harvard Instructor is gonna teach new programming course</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 feb 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Contact Us</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-headphone "></span>
                                        <span class="footer-contact-list-text">+880 (1234) 7894</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">youremail@gmail.com</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text">123 New Street, 6th Floor, Dhaka</span>
                                    </div>
                                </div>
                                <div class="opening-time">
                                    <span>Opening Hour</span>
                                    <span class="opening-date">
                                        Sun - Sat : 10:00 am - 05:00 pm
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-25 pb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copyright text-center">
                                    <span><a target="_blank" href="admin_dasboard.php">Admin</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>




    <?php

    if (isset($_POST["sign"])) {
    ?>
        session_destroy();
        <script type="text/javascript">
            window.location.href = "login.php";
        </script>
    <?php
    }




    ?>
</body>






</html>