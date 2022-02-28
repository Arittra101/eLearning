<?php

include "dbConnection.php";
session_start();
$inc = 1;
$id = $_GET["id"];          //course Id
$_SESSION['C_ID'] = $id;  //course Id to session
// echo $id;

$check_query = "select * from payment where C_ID = $id and S_ID = $_SESSION[Id]";
$rs = mysqli_query($conn, $check_query);
$numRow = mysqli_num_rows($rs);
//echo $numRow;



$course_query = "select * from course where C_ID = $id ";
$rs = mysqli_query($conn, $course_query);
$row = mysqli_fetch_array($rs);

$Cs_des =  $row['C_Des'];
$Cs_name =  $row['C_Name'];


$C_auth = $row["C_Author"];

$teacher_query = "select * from teacher where T_ID = $C_auth ";
$rs1 = mysqli_query($conn, $teacher_query);
$row1 = mysqli_fetch_array($rs1);

$C_des =  $row1['T_Des'];
$C_name =  $row1['T_Name'];
$C_image =  $row1['T_image'];
$C_type =  $row1['T_Type'];

?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sikkha</title>
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
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
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
                            <div class="logo">
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
                                            <a href="index_demo.php">Home</a>

                                        </li>
                                        <li>
                                            <a href="about_us.php">About Us</a>

                                        </li>

                                        <li>
                                            <a href="">Courses</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="course_01.php">All Courses</a>
                                                </li>
                                                <li>
                                                    <a href="Mycourse.php">My Courses</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="contact_us.php">Feedbacks</a>
                                        </li>

                                        <li>
                                            <form method="post">

                                                <button name="sign" class="button_design" type="submit">SignOut</button>
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
    <div class="slider-area">
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Course Details</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div class="course-details-area gray-bg pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="single-course-details-area mb-30">
                        <div class="course-details-thumb">
                            <img src="img/courses/course_details_thumb.jpg" alt="">
                        </div>
                        <div class="single-course-details white-bg">
                            <div class="course-details-title mb-20">
                                <h1><?php echo $Cs_name ?></h1>
                                <form style="margin-top: 15px;" method="post">
                                    <button id="enrollbtn" name="enroll" type="submit" class="btn btn-success">Enroll </button>
                                </form>
                                <h1 id="okenroll" style="color:black; visibility: collapse"><span class="badge bg-success">Enrolled</span></h1>
                            </div>
                            <div class="course-details-tabs">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Curriculum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Advisor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="course-details-overview-top">
                                            <p style="height: 240px;" class="course-details-overview-para"><?php echo $Cs_des ?></p>

                                        </div>
                                        <div class="course-details-overview-bottom d-flex justify-content-between mt-25">
                                            <div class="course-overview-info-left">
                                                <div class="course-overview-info-advisor mt-10">
                                                    <span class="gray-color">Advisor : <span class="primary-color">Alexzender1 Alex</span></span>
                                                </div>
                                                <div class="course-overview-student-lecture mt-10">
                                                    <span class="gray-color">Students : <span class="primary-color">15</span></span>
                                                    <span class="student-lecture-number gray-color">Lectures: <span class="primary-color">35</span></span>
                                                </div>
                                                <div class="course-overview-time-delay mt-10">
                                                    <span class="gray-color">Time : <span class="primary-color">30 Hours</span></span>
                                                </div>
                                            </div>
                                            <div class="course-overview-info-right">
                                                <div class="course-overview-info-category mt-10">
                                                    <span class="gray-color">Category :<span class="primary-color"> Design,</span> UX/UI, Web, Print</span>
                                                </div>
                                                <div class="course-overview-info-tag mt-10">
                                                    <span class="gray-color">Tags : <span class="primary-color"> Web Development,</span> Layout</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p class="course-details-curiculum-para">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expoune.</p>
                                        <div class="curiculum-lecture-details">

                                            <?php

                                            $query = "select * from lesson where C_ID = $id";
                                            $rs = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($rs)) {
                                            ?>
                                                <div class="single-curiculum-lecture table-responsive mt-10">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span class="ti-book"></span>
                                                                    <span class="chapter-name">Lesson <?php echo $inc++; ?></span>
                                                                </td>
                                                                <td style="text-align: left;">
                                                                    <span class="ti-timer "></span>
                                                                    <span class="chapter-name"><?php echo $row['Lesson_Name'] ?></span>
                                                                </td>
                                                                <td>
                                                                    <span class="ti-user"></span>

                                                                    <!-- <span class="chapter-name"> <a class="popup-video" href="<?php echo $row['Lecture_Video'] ?>">Lecture Video</a></span> -->
                                                                    <span class="chapter-name"> <a class="popup-video" href="<?php echo "https://www.youtube.com/watch?v=".$row['Lecture_Video'] ?>">Lecture Video</a></span>
                                                                    <!-- <span class="chapter-name"> <a class="popup-video" href="https://www.youtube.com/watch?v=T04zRoLdGe4">Lecture Video</a></span> -->
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            <?php
                                            }

                                            ?>








                                        </div>
                                    </div>
                                    <!-- cse course teacher -->
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="course-details-adivisor-info mt-30">
                                            <div class="course-details-adivisor-wrapper">
                                                <div class="course-details-adivisor-inner d-flex">
                                                    <div class="adivisor-thumb">
                                                        <img style="height:200px; width:200px" src="image/<?php echo $C_image ?>" alt="">
                                                    </div>
                                                    <div class="adivisor-text white-bg">
                                                        <div class="adivisor-text-heading d-flex mb-10">
                                                            <div class="adivisor-text-title">
                                                                <!-- C_auth -->
                                                                <h4><?php echo  $C_name ?></h4>
                                                                <span><?php echo  $C_type ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="adivisor-para">
                                                            <p><?php echo  $C_des ?></p>
                                                        </div>
                                                        <div class="advisors-social-icon-list">
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
                                    </div>
                                    <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                                        <div class="course-details-reviews mt-30">
                                            <div class="cours-reviews-list mb-30">
                                                <div class="course-reviews-info d-flex justify-content-between align-items-center">
                                                    <div class="reviews-author-info d-flex">
                                                        <div class="reviews-author-thumb">
                                                            <img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
                                                        </div>
                                                        <div class="reviews-author-title">
                                                            <h1>Nathaniel Bustos</h1>
                                                            <span>Manager</span>
                                                        </div>
                                                    </div>
                                                    <div class="courses-reviews-author-rating">
                                                        <ul>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cours-reviews-list mb-10">
                                                <div class="course-reviews-info d-flex justify-content-between align-items-center">
                                                    <div class="reviews-author-info d-flex">
                                                        <div class="reviews-author-thumb">
                                                            <img src="img/testimonials/testimonilas_author_thumb2.png" alt="">
                                                        </div>
                                                        <div class="reviews-author-title">
                                                            <h1>Latanya Kinard</h1>
                                                            <span>Web Designer</span>
                                                        </div>
                                                    </div>
                                                    <div class="courses-reviews-author-rating">
                                                        <ul>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                            <li><span class="ti-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 white-bg">
                            <div class="sidebar-form">
                                <form action="#">
                                    <input placeholder="Search course" type="text">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Category</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link">
                                    <li>
                                        <a href="#">Busines Studies</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">CSE Engineering</a>
                                        <span>07</span>
                                    </li>
                                    <li>
                                        <a href="#">Lerning English</a>
                                        <span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Civil Engineering</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">Islamic Studies</a>
                                        <span>02</span>
                                    </li>
                                    <li>
                                        <a href="#">Banking Management</a>
                                        <span>09</span>
                                    </li>
                                    <li>
                                        <a href="#">Social Science</a>
                                        <span>13</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Recent Course</h4>
                            <div class="sidebar-rc-post">
                                <ul>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html">
                                                    <img src="img/courses/rcourses_thumb01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html">
                                                    <img src="img/courses/rcourses_thumb02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html">
                                                    <img src="img/courses/rcourses_thumb03.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html">
                                                    <img src="img/courses/rcourses_thumb04.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Recent Course</h4>
                            <div class="widget-tags clearfix">
                                <ul class="sidebar-tad clearfix">
                                    <li>
                                        <a href="#">CSE</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Study</a>
                                    </li>
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Education</a>
                                    </li>
                                    <li>
                                        <a href="#">Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Advisor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses start -->
    <div class="courses-area courses-bg-height gray-bg pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Latest Courses</h1>
                        </div>
                        <div class="section-title-para">
                            <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper courses-wrapper-3 mb-30">
                            <div class="courses-thumb">
                                <img src="img/courses/coursesthumb_home3_01.jpg" alt="">
                            </div>
                            <div class="courses-content courses-content-3 clearfix">
                                <div class="courses-heading mt-25 d-flex">
                                    <div class="course-title-3">
                                        <h1><a href="#">Business Studies</a></h1>
                                    </div>
                                    <div class="courses-pricing-3">
                                        <span>$24.99</span>
                                    </div>
                                </div>
                                <div class="courses-para mt-15">
                                    <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                </div>
                                <div class="courses-wrapper-bottom clearfix mt-35">
                                    <div class="courses-button">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper courses-wrapper-3 mb-30">
                            <div class="courses-thumb">
                                <img src="img/courses/coursesthumb_home3_02.jpg" alt="">
                            </div>
                            <div class="courses-content courses-content-3 clearfix">
                                <div class="courses-heading mt-25 d-flex">
                                    <div class="course-title-3">
                                        <h1><a href="#">English Studies</a></h1>
                                    </div>
                                    <div class="courses-pricing-3">
                                        <span>$49.99</span>
                                    </div>
                                </div>
                                <div class="courses-para mt-15">
                                    <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                </div>
                                <div class="courses-wrapper-bottom clearfix mt-35">
                                    <div class="courses-button">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper courses-wrapper-3 mb-30">
                            <div class="courses-thumb">
                                <img src="img/courses/coursesthumb_home3_03.jpg" alt="">
                            </div>
                            <div class="courses-content courses-content-3 clearfix">
                                <div class="courses-heading mt-25 d-flex">
                                    <div class="course-title-3">
                                        <h1><a href="#">CSE Engineering</a></h1>
                                    </div>
                                    <div class="courses-pricing-3">
                                        <span>$69.99</span>
                                    </div>
                                </div>
                                <div class="courses-para mt-15">
                                    <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                </div>
                                <div class="courses-wrapper-bottom clearfix mt-35">
                                    <div class="courses-button">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-none d-lg-none d-none d-md-block col-md-6">
                        <div class="courses-wrapper courses-wrapper-3 mb-30">
                            <div class="courses-thumb">
                                <img src="img/courses/coursesthumb_home3_03.jpg" alt="">
                            </div>
                            <div class="courses-content courses-content-3 clearfix">
                                <div class="courses-heading mt-25 d-flex">
                                    <div class="course-title-3">
                                        <h1><a href="#">CSE Engineering</a></h1>
                                    </div>
                                    <div class="courses-pricing-3">
                                        <span>$69.99</span>
                                    </div>
                                </div>
                                <div class="courses-para mt-15">
                                    <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                </div>
                                <div class="courses-wrapper-bottom clearfix mt-35">
                                    <div class="courses-button">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-view-more-area mt-20 mb-30 text-center">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="courses-view-more-btn">
                                <button class="btn gray-border-btn">view more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
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
                                    <p>Sorem ipsum dolor sit amet conse ctetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud exercition ullamco laboris nisi </p>
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
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post d-flex">
                                    <div class="recent-post-thumb">
                                        <img src="img/post/recent_post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
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
                                        <span class="footer-contact-list-text">+003 (1234) 7894</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">youremail@gmail.com</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text">123 New Street, 6th Floor, New York</span>
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
                                    <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
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
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

<?php

if (isset($_POST["sign"])) {
?>
    session_destroy();
    <script type="text/javascript">
        window.location.href = "login.php";
    </script>
<?php
}

if ($numRow >= 1) {
    echo "df";
?>

    <script type="text/javascript">
        console.log("d");
        document.getElementById("enrollbtn").style.display = "none";
        document.getElementById("okenroll").style.visibility = "visible";
    </script>
<?php
}

if (isset($_POST['enroll'])) {
?>
    <script type="text/javascript">
        window.location.href = "shopping.php";
    </script>
<?php
}
?>

</html>