<?php include "config.php" ?>

<?php include "resources.php" ?>


    <?php $select = "SELECT * FROM home_page_header";
    $run = mysqli_query($conn, $select);
    $show = mysqli_fetch_assoc($run);
    ?>

    <div class="container-fluid" id="header">

        <!-- navbar-->
        <div class="container p-0 m-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div style="width:150px;"><a class="navbar-brand" href="#"><img src="./images/logo1.png" alt="" width="100%"></a></div>
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="booking.php">Book Service</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <!-- header -->

        <div class="container mt-5 pb-5" style="overflow:hidden;">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 mt-5">
                    <h1>
                        <div>
                            <h1 id="headerh1">PROFESSIONAL</h1>
                        </div>

                        <div>
                            <h2 style="color:white;">Electrical Service's Providers</h2>
                        </div>
                    </h1>
                    <p class="header-p mt-5"><?php echo $show['header_bio'] ?></p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="formdiv p-4" id="header-form">
                        <h2 class="text-center text-white mb-3">Book Service You Want</h2>
                        <form method="POST">
                            <input type="text" placeholder="Name" class="form-control mb-3" name="name" required>
                            <input type="number" placeholder="Contact" class="form-control mb-3" name="contact" required>

                            <select class="form-control mb-3" name="city" required>
                                <option disabled selected>Select City <span>&nbsp &nbsp ▼ </span></option>
                                <?php

                                $select = "SELECT * FROM operated_cities";
                                $go = mysqli_query($conn, $select);
                                while ($row = mysqli_fetch_assoc($go)) {

                                ?>
                                    <option><?php echo $row["city_name"] ?></option>
                                <?php } ?>
                            </select>

                            <select class="form-control mb-3" name="service" required>
                                <option disabled selected>Select Service <span>&nbsp &nbsp ▼ </span></option>

                                <?php

                                $select = "SELECT * FROM services_offered";
                                $show = mysqli_query($conn, $select);
                                while ($row = mysqli_fetch_assoc($show)) {

                                ?>
                                    <option><?php echo $row["service_name"] ?></option>
                                <?php } ?>
                            </select>
                            <div style="display:flex; align-items: center; justify-content: center;">
                                <button id="headerbutton" type="submit" name="home_form">Book Service</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <div class="container-fluid p-5" style="background-color:#f5f5f5;">
        <div class="container text-center">
            <h1 class="h1">Se<span class="span">rvices We Of</span>fer</h1>
            <p class="mt-4 para">SETAS provides ultimate installations, repairs & maintenance services at your doorstep.
            </p>
            <div class="card-div">

                <div class="row mt-5">

                    <!-- electric -->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card1">
                            <img src="images/electric.jpg">
                            <div class="content">
                                <h3 class="mt-5">Electrical Wiring</h3>
                                <p class="tp">We provide reliable solutions for your domestic & commercial electric
                                    supply problems</p>
                                <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 1 ?>" >See more</a>
                            </div>
                        </div>
                    </div>

                    <!-- cctv -->
                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5 mb-4">
                        <div class="card1">
                            <img src="images/cctv.jpg">
                            <div class="content">
                                <h3 class="mt-4">CCTV Surveillance</h3>
                                <p class="tp">Security matters, SETAS provide complete installation of best in class IP
                                    & HD security cameras </p>
                                    <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 2 ?>" >See more</a>
                            </div>
                        </div>
                    </div>

                    <!--solar-->
                    <div class="col-lg-3 col-md-3 col-sm-12 ">
                        <div class="card1">
                            <img src="images/solar.jpg">
                            <div class="content">
                                <h3 class="mt-5">Solar Pannles</h3>
                                <p class="tp">asdadadskdasldksdlknc andasnakdsjkndsdasnd aasda</p>
                                <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 3 ?>" >See more</a>

                            </div>
                        </div>
                    </div>

                    <!-- Industpannel -->
                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5">
                        <div class="card1">
                            <img src="images/Industrialpannel.jpg">
                            <div class="content">
                                <h3 class="mt-4">Industrial Electrical Supply</h3>
                                <p class="tp">Want to scale your business but electric supply issues are creating
                                    barriers. We are here for there solutions </p>
                                    <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 4 ?>" >See more</a>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mt-5">

                    <!-- Generators -->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card1">
                            <img src="images/generator.jpg">
                            <div class="content">
                                <h3 class="mt-1">Generators Installation</h3>
                                <p class="tp">Planning to install generators to aviod un certain power cuts but cant
                                    find a best professional. Relax let SETAS do the job with our experienced
                                    professionals</p>
                                <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 5 ?>" >See more</a>

                            </div>
                        </div>
                    </div>

                    <!-- fancy lighting -->
                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5 mb-4">
                        <div class="card1">
                            <img src="images/fancy lighting.jpg">
                            <div class="content">
                                <h3 class="mt-">Fancy Lightings</h3>
                                <p class="tp">Your home / office deserves to look great, even at night. Improve your
                                    home's beauty with SETAS's Fancy Decoration Lights installation team and give your
                                    place a new life .</p>
                                    <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 6 ?>" >See more</a>

                            </div>
                        </div>
                    </div>

                    <!--biomatric-->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card1">
                            <img src="images/biomatric.jpg">
                            <div class="content">
                                <h3>Biomatric Systems</h3>
                                <p class="tp">Thinking about security ! Biomatric systems are the best choice. Here you
                                    can find the best as per your requirements. </p>
                                    <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 7 ?>" >See more</a>
                            </div>
                        </div>
                    </div>

                    <!-- street lights -->
                    <div class="col-lg-3 col-md-5 col-sm-12 mt-5">
                        <div class="card1">
                            <img src="images/solarfooter.jpg">
                            <div class="content">
                                <h3 class="mt-3">Street Lights</h3>
                                <p class="tp">SETAS offers complete package on installation of Solar / Normal street
                                    lights. With complete satisfaction</p>
                                    <a class="pageshift btn" href="home_cards.php?id=<?php $card_id = 8 ?>" >See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>


    <div class="container-fluid">
        <!-- why to choose us -->
        <div class="container mt-3 mb-3 p-5">
            <h1 class="h1">Wh<span class="span">y To Choose SET</span>AS</h1>
            <div class="row mt-5">

                <div class="col-lg-6 col-md-6 col-sm-12 mt-2 pt-5">
                    <h2 class="h2"><span> Who we are ?</span> </h2>

                    <p class="para" style="text-align:justify;">SETAS is one of the most trusted and realiable platform
                        in the
                        market which provides solutions of all your technical problems. Our motive is to provide best
                        services to our corporate, commercial, and residential customers. Following are some of our main
                        key components to success :</p>
                    <ul class="list" style="align-items:center">
                        <li style="font-weight:bold;" class="mb-3 "><span class="icon_span"><i class="fa-solid fa-user-check"></i></span> Vetted and background checked in house
                            staff</li>
                        <li style="font-weight:bold;" class="mb-3"><span class="icon_span"><i class="fa-solid fa-screwdriver-wrench"></i></span>High-Tech and Most Advanced Equipment</li>
                        <li style="font-weight:bold;" class="mb-3"><span class="icon_span"><i class="fa-solid fa-headset"></i></span>&nbsp24/7 Customer service facility</li>
                        <li style="font-weight:bold;" class="mb-3"><span class="icon_span"><i class="fa-solid fa-thumbs-up"></i></span>Post service gurantee</li>
                        <li style="font-weight:bold;" class="mb-3"><span class="icon_span"><i class="fa-solid fa-list-check"></i></span>Quality control and safety</li>
                        <li style="font-weight:bold;" class="mb-3"><span class="icon_span"><i class="fa-solid fa-hand-holding-dollar"></i></span>Affordable and upfront pricing
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/AdobeStock_296813724.jpeg" alt="Worker" class="toolimg">
                </div>
            </div>


        </div>
    </div>



    <?php include "footer.php" ?>
