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
    $vision = mysqli_real_escape_string($conn, $_POST["about_vision"]);
    $Query = " UPDATE `about_page` SET `mission`='$vision' WHERE id = 1";
    $run = mysqli_query($conn, $Query);
    if ($run) {
        echo "<script>swal('Success', 'Vision has been edited', 'success');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<div class="container-fluid pt-5">
    <h3>About Page Vision</h3>
    <p>Type the vision for the about section</p>
    <div style="width:600px;">
        <form method="POST">
            <div class="mt-4">
                <div>
                    <label>Enter Vision</label>
                    <textarea name="about_vision" placeholder="Type vision..." class="form-control" id="" cols="30" rows="5">
                        <?php echo $Show['vision'] ?>
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