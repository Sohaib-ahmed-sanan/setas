<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "../config.php" ?>
<?php
$Select = "SELECT * FROM `about_page` WHERE `id` = 1";
$Run = mysqli_query($conn, $Select);
$Show = mysqli_fetch_assoc($Run);
?>
<?php
if (isset($_POST['publish'])) {
    $aim =  mysqli_real_escape_string($conn, $_POST["about_aim"]);
    $Query = " UPDATE `about_page` SET `moto`= '$aim' WHERE `id` = 1";
    $run = mysqli_query($conn, $Query);
    if ($run) {
        echo "<script>swal('Success', 'Moto has been edited', 'success');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<div class="container-fluid pt-5">
    <h3>About Page Ambition</h3>
    <p>Type the Ambition for the about section</p>
    <div style="width:600px;">
        <form method="POST">
            <div class="mt-4">
                <div>
                    <label>Enter Ambition</label>
                    <textarea name="about_aim" placeholder="Type Aim..." class="form-control" id="" cols="30" rows="5">
                        <?php echo $Show['moto'] ?>
                    </textarea>
                </div>
            </div>

            <div>
                <input type="submit" value="Publish" class="btn btn-primary mt-3" name="publish">
            </div>

        </form>
    </div>
</div>



<?php include "footer.php" ?>