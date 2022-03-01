<?php

include "dbConnection.php";
session_start();
$id = $_GET["id"];  

$_SESSION['Course_ID']  = $id;
echo $id;
$rs = mysqli_query($conn, "Select * from course where C_ID = $id");
$C_ID = "";
$C_Name = "";
$C_Des = "";
$C_Author = "";
$C_OPrice = "";
$C_SPrice = "";
while ($row = mysqli_fetch_array($rs)) {

    $C_ID = $row["C_ID"];
    $C_Name = $row["C_Name"];
    $C_Des = $row["C_Des"];
    $C_Author = $row["C_Author"];
    $C_OPrice = $row["C_OPrice"];
    $C_SPrice = $row["C_SPrice"];
}
echo $C_Name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="admin_course_style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>



    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="container my-4">



        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h4 class="float-right  mt-1"><?php echo $C_ID; ?></h4>
                        <!-- <a href="index.php" class="float-right btn btn-outline-primary mt-1">Home</a> -->
                        <h4 class="card-title mt-2">Course Id</h4>

                    </header>
                    <article class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input name="C_Name" type="text" class="form-control" value="<?php echo $C_Name; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Course Description</label>
                                <input name="C_Des" style="height:60px"  type="text" class="form-control" value="<?php echo $C_Des; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Course Author</label>
                                <input name="C_Author" type="text" class="form-control" value="<?php echo $C_Author; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Course Orginal Price</label>
                                <input name="C_OPrice" type="text" class="form-control" value="<?php echo $C_OPrice; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Course Selling Price</label>
                                <input name="C_SPrice" type="text" class="form-control" value="<?php echo $C_SPrice; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->



                            <div class="form-group">
                                <button name="update" type="submit" class="btn btn-primary btn-block"> Update </button>
                            </div> <!-- form-group// -->
                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                        </form>
                    </article> <!-- card-body end .// -->
                    <div class="border-top card-body text-center">Have an account? <a href="logIn.php">Log In</a></div>
                </div> <!-- card.// -->
            </div> <!-- col.//-->

        </div> <!-- row.//-->


    </div>
    <!--container end.//-->
    <a class = "float_button" href="add_lesson.php">+</a>

</body>


<?php

if (isset($_POST["update"])) {

        $update_query = "UPDATE `course` SET `C_Name`='$_POST[C_Name]',`C_Des`='$_POST[C_Des]',`C_Author`='$_POST[C_Author]',`C_OPrice`='$_POST[C_OPrice]',`C_SPrice`='$_POST[C_SPrice]'  WHERE C_ID =  '$id'";

        if(mysqli_query($conn,$update_query))
        {
                ?>
                    <script type="text/javascript">$
                        alert("Succesfully Updated");
                        window.location.href="admin_course.php"
                    </script>
                <?php
        }

}


?>

</html>