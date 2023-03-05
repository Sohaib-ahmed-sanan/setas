<?php include "../config.php" ?>
<?php include "header.php" ?>

<?php

if (isset($_GET["id"])) {
    $get = $_GET["id"];
    $select = "SELECT * FROM `operated_cities` where city_id = $get";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
}

?>

<?php
if (isset($_POST['update'])) {
    $city = $_POST['editcity'];
    $query = "UPDATE `operated_cities` SET `city_name`='$city' WHERE city_id = $get";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "<script>swal('Success', 'City has been edited', 'success');</script>";
        header('location:booking_city.php');
    }
}

?>

<?php include "sidebar.php" ?>


<div class="container-fluid text-center pt-3">
    <h1>Edit Current City</h1>
    <p>Here you can edit the city where SETAS is operated</p>
    <form method="post">
        <div>
            <input type="text" class="form-control" name="editcity" value="<?php echo $row['city_name'] ?>">
        </div>
        <div style=" display:flex; justify-content: space-between;">
            <input type="submit" name="update" value="Edit City" class="btn btn-success mt-5    ">
            <a href="booking_city.php" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </form>
</div>



<?php include "footer.php" ?>