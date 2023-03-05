<?php include "config.php" ?>



<!-- Nav bar -->
<div class="container-fluid p-0 m-0">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="booking.php">Book Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $select = "SELECT * FROM `card_info` WHERE id = '$id' ";
    $run = mysqli_query($conn, $select);
    $show = mysqli_fetch_assoc($run);

}

?>

<div class="container-fluid mt-5 mb-5 text-center">
    <h1 class="h1">El<span class="span">ectrical Wiri</span>ng</h1>
    <p class="para mt-5"><?php echo $show["info"] ?></p>

    <h2 class="h1 mt-5 mb-5">Ou<span class="span">r Speacialia</span>ty</h2>
    <p class="para">
    <?php echo $show["our_speaciality"]?>
    </p>
    

</div>


<?php include "footer.php" ?>