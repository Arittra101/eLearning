<?php

include "dbConnection.php";
session_start();
echo $_SESSION['C_ID'];
echo $_SESSION['Id'];

$query = "Select * from course where C_ID = $_SESSION[C_ID]";
$rs =  mysqli_query($conn, $query);
$row = mysqli_fetch_array($rs);

$c_name = $row['C_Name'];
$c_price = $row['C_OPrice'];
$c_price = $row['C_OPrice'];
$c_price_float = (float)$c_price;
$s_price =  $c_price_float - ($c_price_float * 0.4);
//echo  $s_price;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .center {
        margin: 100px;
        width: 80%;
        border: 3px solid #73AD21;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 5px 10px #dce926;
        /* margin: 50%; */
    }

    .center2 {

        margin-left: 100px;

        /* margin: 50%; */
    }
</style>

<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container center">
        <h1 class="center2"> Enroll Course</h1>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $c_name ?></h4>
                                        <h5 class="media-heading"> by <a href="index_demo.php">CholoSikhi</a></h5>
                                        <span>Status: </span><span class="text-warning"><strong>40 % Discount</strong></span>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                            </td>
                            <td class="col-md-2 text-center"><strong><?php echo $c_price ?></strong></td>
                            <td class="col-md-2 text-center"><strong><?php echo $c_price ?></strong></td>
                            <td class="col-md-2">

                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <h5>Discount</h5>
                            </td>
                            <td class="text-right">
                                <h5><strong>40%</strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Course Price</h5>
                            </td>
                            <td class="text-right">
                                <h5><strong><?php echo $s_price . " " . "BDT" ?></strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h3>Total</h3>
                            </td>
                            <td class="text-right">
                                <h3><strong><?php echo $s_price . " " . "BDT" ?></strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                         
                            <td>
                                <form method="post">
                                    <button name="buy" type="submit" class="btn btn-success">
                                        Checkout <span class="glyphicon glyphicon-play"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php
if (isset($_POST['buy'])) {
    $date = date("Y/m/d");
    $query = "INSERT INTO `payment`(`C_ID`, `S_ID`, `Date`, `Amount`) VALUES ('$_SESSION[C_ID]','$_SESSION[Id]','$date','$s_price')";
    mysqli_query($conn, $query);
?>
    <script type="text/javascript">
        alert("Successfully Enroll");
        window.location.href = "course_01.php";
    </script>
<?php
}

?>

</html>