<?php

include 'connect.php';
$id=$_GET['id'];
$delete= "delete from user where id=$id";
$quer=mysqli_query($con,$delete);
if ($quer) {
    ?>
    <script>
        alert("Delete successfully");
    </script>
    <?php
    header('location:Viewstudents.php');
}


?>