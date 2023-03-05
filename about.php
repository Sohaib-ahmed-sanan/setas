<?php include "config.php" ?>
<?php
$Select = "SELECT * FROM `about_page` WHERE `id` = 1";
$Run = mysqli_query($conn, $Select);
$Show = mysqli_fetch_assoc($Run);
?>

<!-- navbar-->
<div class="container-fluid p-0 m-0 bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div style="width:150px;"><a class="navbar-brand" href="#"><img src="./images/logo.png" alt="" width="100%"></a></div>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="booking.php">Book Service</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>


<div class="container-fluid mt-5 mb-5 text-center">
    <div class="container">
        <h1 class="h1">Wh<span class="span">at is SET</span>AS</h1>
        <div class="mt-5">
            <p class="para">
                <?php echo $Show["bio"] ?>
            </p>
        </div>

        <h1 class="h1">Our<span class="span"> Aimbiti</span>on</h1>
        <div class="mt-5">
            <p class="para">
                <?php echo $Show["moto"] ?>
            </p>
        </div>

        <div class="container mt-5 mb-5">
            <h1 class="h1">Ou<span class="span">r visi</span>on</h1>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="images/vision.jpg">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="para mt-1"><?php echo $Show["vision"] ?></p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h1 class="h1">Ou<span class="span">r missi</span>on</h1>
            <div class="row mt-5">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="para mt-1"><?php echo $Show["mission"] ?></p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="images/mission.jpg">
                </div>
            </div>
        </div>

        


    </div>
</div>
<?php include "footer.php" ?>