<?php include "header.php" ?>
<?php include "../config.php" ?>
<?php
    $get = "SELECT * FROM home_page_header";
    $run = mysqli_query($conn, $get);
    $show = mysqli_fetch_assoc($run);
    if(isset($_POST['publish'])){
       
        $heading = $_POST['header_heading'];
        $descrip = $_POST['header_bio'];
       $query = "UPDATE `home_page_header` SET `header_bio_heading`='$heading',`header_bio`='$descrip' WHERE id=1";
       $run = mysqli_query($conn, $query);
       if ($run) {
        echo "<script> allert('success')</script>";
        header('location:header_bio.php');
      } 
    }
   
   ?> 
<?php include "sidebar.php" ?>


<div class="container-fluid text-center pt-3">
    <h1>Edit Header Bio</h1>
    <p>Here you can edit the bio of header section.</p>
</div>

<div class="container-fluid">
    <h3>Header Heading</h3>
    <p>Type the heading for the header section</p>
    <div style="width:600px;">
        <form method="post">

            <div>
                <label>Enter Heading</label>
                <input type="text" name="header_heading" placeholder="Type Heading..." value="<?php echo $show['header_bio_heading'] ?>" class="form-control">
            </div>
            <div class="mt-4">
                <h3>Header Bio</h3>
                <p>Type the heading for the header section</p>
                <div>
                    <label>Enter Bio</label>
                    <textarea name="header_bio"placeholder="Type Bio..." class="form-control" id="" cols="30" rows="5"><?php echo $show['header_bio'] ?></textarea>
                </div>
            </div>

            <div>
                <input type="submit" value="Publish" class="btn btn-primary mt-3" name="publish">
            </div>

        </form>
    </div>

 



</div>

<?php include "footer.php" ?>