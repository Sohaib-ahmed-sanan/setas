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
    $bio = mysqli_real_escape_string($conn, $_POST['about_bio']); 
    $query_1 = "UPDATE `about_page` SET `bio`='$bio' WHERE id = 1";
    $run_query = mysqli_query($conn, $query_1);
    if (!$run_query) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
}
?>
<div class="container-fluid pt-5">
    <h3>About Page Bio</h3>
    <p>Type the Bio for the about section</p>
    <div style="width:600px;">
        <form method="POST">
            <div class="mt-4">
                <div>
                    <label>Enter Bio</label>
                    <textarea name="about_bio" placeholder="Type Bio..." class="form-control" id="" cols="30" rows="5">
                        <?php echo $Show['bio'] ?>
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