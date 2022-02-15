<?php

        $ServerName = "localhost";
        $userName = "root";
        $Password = "";
        $db = "elearn";

        $conn = mysqli_connect($ServerName,$userName,$Password);
        mysqli_select_db($conn,$db);
        if($conn)
         //echo "connected";

?>
