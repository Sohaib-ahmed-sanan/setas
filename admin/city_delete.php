
<?php include "../config.php";
error_reporting(1);
 ?>

<?php include "header.php" ?>
<?php

if (isset($_GET["id"])) {
    $get = $_GET["id"];
    $del = "DELETE FROM `operated_cities` where city_id = $get";
    $result = mysqli_query($conn, $del);
    header ("location:booking_city.php");
    
}
?>
<?php include "sidebar.php" ?>

<?php include "footer.php"?>