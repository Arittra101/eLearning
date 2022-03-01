<?php
    include "dbConnection.php";
    $id = $_GET["id"];
    mysqli_query($conn,"DELETE FROM `feedback` WHERE F_ID=$id");


?>
<script type="text/javascript">
      alert("Succesfully Deleted Courses!");
    window.location="admin_feedbacks.php";
</script>