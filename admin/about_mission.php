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
    $mission =  mysqli_real_escape_string($conn, $_POST["about_mission"]) ;
    $Query = " UPDATE `about_page` SET `mission`='$mission' WHERE id = 1";
    $run = mysqli_query($conn, $Query);
    if ($run) {
        echo "<script>swal('Success', 'Mission has been edited', 'success');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
}
?>
<div class="container-fluid pt-5">
    <h3>About Page Mission</h3>
    <p>Type the Mission for the about section</p>
    <div style="width:600px;">
        <form method="POST">
            <div class="mt-4">
                <div>
                    <label>Enter Mission</label>
                    <textarea name="about_mission" placeholder="Type Mission..." class="form-control" id="" cols="30" rows="5">
                        <?php echo $Show['mission'] ?>
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