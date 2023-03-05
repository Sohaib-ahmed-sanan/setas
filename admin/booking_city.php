<?php include "header.php" ?>
<?php include "../config.php" ?>
<?php
if (isset($_POST['add'])) {
    $added_city = $_POST['Add_city'];
    $query = "INSERT INTO `operated_cities`(`city_name`) VALUES ('$added_city')";
    $run = mysqli_query($conn, $query);
    header('Cache-Control: no-store, no-cache, must-revalidate');
}

?>


<?php include "sidebar.php" ?>




<div class="container-fluid text-center pt-3">
    <h1>Cities</h1>
    <p>Following is the list of cities where we provide our services</p>
    <div>
        <?php
        $select = "SELECT * FROM `operated_cities`";
        $run = mysqli_query($conn, $select);
        ?>
        <table class="table">
            <tr>
                <th>Sno</th>
                <th>Cities</th>
                <th>Actions</th>
            </tr>
            <?php $i = 1;
            while ($row = mysqli_fetch_assoc($run)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['city_name'] ?></td>
                    <td>
                        <a href="city_edit.php?id=<?php echo $row["city_id"] ?>" class="btn btn-success">Edit</a>
                        <a href="city_delete.php?id=<?php echo $row["city_id"] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </table>
    </div>
</div>

<div class=" mt-4 container-fluid">
    <div class="text-center">
    <h1>Add city</h1>
    <p>Here you can add any city </p>
    </div>
    
    <form method="post">
        <div>
            <label>Enter City</label>
            <input type="text" name="Add_city" class="form-control">
        </div>
        <div>
            <input type="submit" value="Add City" name="add" class="btn btn-success mt-3">
        </div>
    </form>
</div>




<?php include "footer.php" ?>