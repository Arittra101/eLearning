<?php

    include "dbConnection.php";
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
                        <a href="index.php" class="float-right btn btn-outline-primary mt-1">Home</a>
                        <h4 class="card-title mt-2">Sign In</h4>
                    </header>
                    <article class="card-body">
                        <form method="POST">
                          
                            <div class="form-group">
                                <label>Email address</label>
                                <input name ="email" type="email" class="form-control" placeholder="Email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div> <!-- form-group end.// -->


                            <div class="form-group">
                                <label>Password</label>
                                <input name="pass" class="form-control" type="password" placeholder="Password">
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <button name="logIN" type="submit" class="btn btn-primary btn-block"> Log In </button>
                            </div> <!-- form-group// -->
                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                        </form>
                    </article> <!-- card-body end .// -->
                    <div class="border-top card-body text-center">Haven't any account? <a href="signUp.php">Sign Up</a></div>
                </div> <!-- card.// -->
            </div> <!-- col.//-->

        </div> <!-- row.//-->


    </div>
    <!--container end.//-->
 
<?php


        session_start();
        if(isset($_POST["logIN"]))
        {
            // echo "ok";
          
            $query  = "select S_Pass from student student where S_Email =  '$_POST[email]' and S_Pass= $_POST[pass]" ;
            $rs = mysqli_query($conn,$query);
            $num_row = mysqli_num_rows($rs);
            if($num_row>0)
            {
                ?>
                <script text="text/javascript">
                    
                    alert("Successfully LogIN!");
                    window.location.href="userIndex.php";
                    </script>
                <?php   
            }
          
            else{
                ?>
                <script text="text/javascript">
                    
                    alert("Wrong Password!");
                //  window.location.href="logIn.php";
                    </script>
                <?php
            }
        }



?>
</body>

</html>