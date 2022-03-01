<?php
    include "dbConnection.php";
    $id = $_GET["id"];
    mysqli_query($conn,"DELETE FROM `course` WHERE C_ID=$id");


?>
<script type="text/javascript">
      alert("Succesfully Deleted Courses!");
    window.location="admin_course.php";
</script>