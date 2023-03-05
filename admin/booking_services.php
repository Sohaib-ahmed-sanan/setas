<?php include "header.php" ?>
<?php include "../config.php" ?>
<?php
if (isset($_POST['add'])) {
    $added_service = $_POST['Add_service'];
    $query = "INSERT INTO `services_offered`(`service_name`) VALUES ('$added_service')";
    $run = mysqli_query($conn, $query);
    header('Cache-Control: no-store, no-cache, must-revalidate');
}

?>


<?php include "sidebar.php" ?>




<div class="container-fluid text-center pt-3">
    <h1>Services</h1>
    <p>Following is the list of services we provide to our customers</p>
    <div>
        <?php
        $select = "SELECT * FROM `services_offered`";
        $run = mysqli_query($conn, $select);
        ?>
        <table class="table">
            <tr>
                <th>Sno</th>
                <th>Services</th>
                <th>Actions</th>
            </tr>
            <?php $i = 1;
            while ($row = mysqli_fetch_assoc($run)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['service_name'] ?></td>
                    <td>
                        <a href="service_edit.php?id=<?php echo $row["service_id"] ?>" class="btn btn-success">Edit</a>
                        <a href="service_delete.php?id=<?php echo $row["service_id"] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </table>
    </div>
</div>

<!-- add new service -->

<div class=" mt-4 container-fluid">
    <div class="text-center">
    <h1>Add service</h1>
    <p>Here you can add any new services we offers. </p>
    </div>
    
    <form method="post">
        <div>
            <label>Enter Service name</label>
            <input type="text" name="Add_service" class="form-control">
        </div>
        <div>
            <input type="submit" value="Add Service" name="add" class="btn btn-success mt-3">
        </div>
    </form>
</div>




<?php include "footer.php" ?>