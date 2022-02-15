<?php
include "dbConnection.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .Card_container {

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 30%;
        height: 400px;
        margin: 10px;
    }

    .image{

        width: 100%;
        height: 160px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-bottom: 10px;
    }

    .Sh {
        margin-top: 3px;
        width: 90%;
        font-family: 'Open Sans Condensed', sans-serif;
        font-weight: bold;
        color: rgb(156, 154, 151);
        margin-left: 9px;
    }

    .Lh {
        margin-top: 1px;
        font-size: 16px;
        width: 90%;
        font-family: system-ui;
        font-weight: bold;
        color: rgb(17, 16, 14);
        margin-left: 9px;
    }

    .Des {
        width: 90%;
        height: 100px;
        margin-left: 9px;

    }

    .enroll {
        margin-top: 23px;
        margin-left: 8px;



    }

    .enroll_btn {

        background-color: #7c3aed;
        color: white;
        font-weight: bold;
        border-radius: 20px;

    }
</style>

<body>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- nevbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a style="font-size: 26px;" class="navbar-brand" href="#">eLearning</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dasboard.php">Courses</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link ">Feedbacks</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link ">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" method="post">

                    <button name="logIn" class="btn btn-outline-success mx-3" type="submit">LogIn</button>
                    <button name="signUp" class="btn btn-outline-success" type="submit">SignUp</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbarend    -->


    <!-- start carousel -->
    <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome To eLearning</h5>
                        <p>Journey Will start from here</p>
                        <button class="btn btn-primary bg-success">Problem Solving</button>
                        <button class="btn btn-primary bg-danger ">Web Development</button>
                        <button class="btn btn-primary">Android Development</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome To eLearning</h5>
                        <p>Journey Will start from here</p>
                        <button class="btn btn-primary bg-success">Problem Solving</button>
                        <button class="btn btn-primary bg-danger">Web Development</button>
                        <button class="btn btn-primary">Android Development</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome To eLearning</h5>
                        <p>Journey Will start from here</p>
                        <button class="btn btn-primary bg-success">Problem Solving</button>
                        <button class="btn btn-primary bg-danger">Web Development</button>
                        <button class="btn btn-primary">Android Development</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carousel -->



    <!-- Start Blpg part -->
    <div class="container my-4">
        <h2 style="text-align: center;">Recomenden Courses</h2>
        <hr>
        <div style="margin-top: 40px; margin-left:5%;margin-right:5%" class="row mb-2 ">
            <div class="Card_container col-md-4 col-lg-3">
                <div > 
                    <img class="image" src="image/elearn.jpg" alt="">
                </div>
                <div class="Sh">
                    Free Course
                </div>
                <div class="Lh">
                    Python Course
                </div>
                <div class="Des">
                    Python is an interpreted high-leve high-level hinondnfk programming language. Its design philosophy emphasizes
                    code readability
                </div>
                <div class="enroll">
                    <button type="button" class="btn enroll_btn">Enroll Course</button>
                </div>
            </div>

            <div class="Card_container col-md-4 col-lg-3">
                <div>
                    <img class="image" src="image/elearn.jpg" alt="">
                </div>
                <div class="Sh">
                    Free Course
                </div>
                <div class="Lh">
                    Python Course
                </div>
                <div class="Des">
                    Python is an interpreted high-leve high-level hinondnfk programming language. Its design philosophy emphasizes
                    code readability
                </div>
                <div class="enroll">
                    <button type="button" class="btn enroll_btn">Enroll Course</button>
                </div>
            </div>
            <div class="Card_container col-md-4 col-lg-3">
                <div >
                    <img class="image" src="image/elearn.jpg" alt="">
                </div>
                <div class="Sh">
                    Free Course
                </div>
                <div class="Lh">
                    Python Course
                </div>
                <div class="Des">
                    Python is an interpreted high-leve high-level hinondnfk programming language. Its design philosophy emphasizes
                    code readability
                </div>
                <div class="enroll">
                    <button type="button" class="btn enroll_btn">Enroll Course</button>
                </div>
            </div>

        </div>
        
        <!-- end Blpg part -->

        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>




        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->



        <?php

        if (isset($_POST["signUp"])) {
        ?>
            <script type="text/javascript">
                window.location.href = "signUp.php";
            </script>
        <?php
        }
        ?>

</body>

</html>