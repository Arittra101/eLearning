<?php

include "dbConnection.php";
$id = $_GET["id"];
echo $id;
$rs = mysqli_query($conn, "Select * from teacher where T_ID = $id");
$T_ID = "";
$T_Name = "";
$T_Des = "";
$T_Mail = "";
$T_type = "";
// $C_SPrice = "";
while ($row = mysqli_fetch_array($rs)) {

    $T_ID = $row["T_ID"];
    $T_Name = $row["T_Name"];
    $T_Des = $row["T_Des"];
    $T_Mail = $row["T_Mail"];
    $T_type = $row["T_Type"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                        <h4 class="float-right  mt-1"><?php echo $T_ID; ?></h4>
                        <!-- <a href="index.php" class="float-right btn btn-outline-primary mt-1">Home</a> -->
                        <h4 class="card-title mt-2">Instructor Id</h4>

                    </header>
                    <article class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Instructor Name</label>
                                <input name="T_Name" type="text" class="form-control" value="<?php echo $T_Name; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Instructor Description</label>
                                <input name="T_Des" style="height:60px"  type="text" class="form-control" value="<?php echo $T_Des; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Instructor Email</label>
                                <input name="T_Mail" type="text" class="form-control" value="<?php echo $T_Mail; ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label>Instructor Type</label>
                                <input name="T_type" type="text" class="form-control" value="<?php echo $T_type; ?>">
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

</body>


<?php

if (isset($_POST["update"])) {

        $update_query = "UPDATE `teacher` SET `T_Name`='$_POST[T_Name]',`T_Des`='$_POST[T_Des]',`T_Mail`='$_POST[T_Mail]',`T_Type`='$_POST[T_type]'  WHERE T_ID =  '$id'";

        if(mysqli_query($conn,$update_query))
        {
                ?>
                    <script type="text/javascript">$
                        alert("Succesfully Updated");
                        window.location.href="admin_teacher.php"
                    </script>
                <?php
        }

}


?>

</html>