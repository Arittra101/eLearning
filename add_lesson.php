<?php
include "dbConnection.php";
session_start();
echo $_SESSION['Course_ID'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="add_course_style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <div class="container form_con">


        <h2>Add Lesson</h2><br>

        <form class="form" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Lesson Topic</label>
                <input name="L_Topic" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <!-- <div class="form-group">
                <label for="exampleInputPassword1">Author</label>
                <input name="C_Author" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div> -->

            <div class="form-group">
                <label for="exampleInputPassword1">Course Lesson</label>
                <input name="L_Video" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>





            <button name="submit" style=" margin-bottom:30px ;position:relative; margin-left:87%" type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>













    <!-- 
<footer >
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer> -->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <?php

    if (isset($_POST["submit"])) {


        $query = "insert into lesson values ($_POST[L_Topic],$_POST[L_Video],$_SESSION[Course_ID])";
        $query = "INSERT INTO `lesson`(`Lesson_Name`, `Lecture_Video`, `C_ID`) VALUES ('$_POST[L_Topic]','$_POST[L_Video]','$_SESSION[Course_ID]')";
        if (mysqli_query($conn, $query)) {
    ?>
            <script type="text/javascript">
                
                alert("Succesfully Added");
                
            </script>
    <?php

        }
    }

    ?>
</body>

</html>