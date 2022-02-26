<?php
include "dbConnection.php";
session_start();
// echo $_SESSION['Id'];
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

    .button_design{
           border: none;
           /* border-radius: 5px; */
           height: 35px;
           background-color: rgb(255, 255, 255);
           
           margin: 5px;
           
    }
    .button_design:hover{
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
        <div class="header-area header-sticky">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number"><?php echo $_SESSION['FName']."  ".$_SESSION['LName']; ?></p>
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
                                            <a href="course_01.php">Courses</a>
                                           
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
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Contact Us</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
    <!-- courses start -->
    <div class="advisors-area gray-bg pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="contact-info-text">
                        <div class="section-title mb-20">
                            <div class="section-title-heading mb-10">
                                <h1>Contact Info</h1>
                            </div>
                            <div class="section-title-para">
                                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-headphone"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Call Us</h5>
                                    <span>+8801869544099</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Email Us</h5>
                                    <span>E-Learning@gmail.com</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Location</h5>
                                    <span>Niketon Bazar,Dhaka</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="events-details-form faq-area-form mb-30 p-0">
                        <form method = "post">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="events-form-title mb-25">
                                        <h2>Do You Have Any Questions</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input name="Name" placeholder="Name :" type="text" value="<?php echo $_SESSION['FName']."  ".$_SESSION['LName']; ?>" readonly>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input name="email" placeholder="Email :" type="text" value="<?php echo $_SESSION['Email'] ?>" readonly>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input name="subject" placeholder="Subject :" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input name="occu" placeholder="Occupation :" type="text">
                                </div>
                                <div class="col-xl-12">
                                    <textarea name="feed" cols="30" rows="10" placeholder="Feedbacks :"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <div class="faq-form-btn events-form-btn">
                                        <button  name ="submit" type="submit" class="btn m-0">submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- map start -->
  
        
    </div>
    <!-- map end -->
    <!-- brand start -->

    <!-- brand end -->
    <!-- subscribe start -->

    <!-- subscribe end -->
    <!-- footer start -->
    <footer>
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

        if(isset($_POST['submit']))
        {

            // $query = "insert into feedback values('$_POST[Name]','$_SESSION[Id]','$_POST[email]','$_POST[subject]','$_POST[occu]','$_POST[feed]')";
            $query="INSERT INTO `feedback`(`S_Name`, `S_ID`, `S_Email`, `Subject`, `S_Type`, `F_Des`) VALUES ('$_POST[Name]','$_SESSION[Id]','$_POST[email]','$_POST[subject]','$_POST[occu]','$_POST[feed]')";
            if(mysqli_query($conn,$query)){
                ?>
                <script type="text/javascript">
                    alert("Successfully Added Feedbacks")    
                    window.location.href ="index_demo.php"
                </script>
                <?php
            }
        }
?>
</html>
