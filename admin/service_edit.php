<?php include "../config.php" ?>
<?php include "header.php" ?>

<?php

if (isset($_GET["id"])) {
    $get = $_GET["id"];
    $select = "SELECT * FROM `services_offered` where service_id = $get";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
}

?>

<?php
if (isset($_POST['update'])) {
    $service_name = $_POST['edit_service'];
    $query = "UPDATE `services_offered` SET `service_name`='$service_name' WHERE service_id = $get";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "<script>swal('Success', 'Service has been edited', 'success');</script>";
        header('location: booking_services.php');
    }
}

?>

<?php include "sidebar.php" ?>


<div class="container-fluid text-center pt-3">
    <h1>Edit Current Service</h1>
    <p>Here you can edit the service SETAS is providing</p>
    <form method="post">
        <div>
            <input type="text" class="form-control" name="edit_service" value="<?php echo $row['service_name'] ?>">
        </div>
        <div style=" display:flex; justify-content: space-between;">
            <input type="submit" name="update" value="Edit Service" class="btn btn-success mt-5">
            <a href="booking_services.php" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </form>
</div>



<?php include "footer.php" ?>