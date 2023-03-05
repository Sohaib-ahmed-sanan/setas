<?php include "config.php" ?>
<?php include "resources.php" ?>
<?php

if (isset($_GET['n'])) {
  session_start();
  $service = $_SESSION['service'];
  $city =  $_SESSION['city'];
  $contact = $_SESSION['contact'];
  $name =   $_SESSION['name'];
} else {
  $city_value = "Select City <span>&nbsp &nbsp ▼ </span>";
  $service_value = "Select Service <span>&nbsp &nbsp ▼ </span>";
}
error_reporting(1);
?>

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

  <div class="container-fluid text-center p-5" style="background-color:#f5f5f5;">
    <h1 class="mb-4" style="color:#626262">Th<span class="span">ings to Rememb</span>er</h1>
    <p class="para mb-0">Sit back and relax ! SETAS is one click away to provide complete solutions of all your problems
    </p>

    <div class="row mt-5">
      <div class="col-lg-3 col-md-3 col-sm-6 mt-4">
        <div>
          <span class="icon_spanbooking"><i class="fa-solid fa-user-check"></i></span>
          <p class="mt-5 mb-5">Vetted and background checked in house staff</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 mt-4">
        <div>
          <span class="icon_spanbooking"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <p class="mt-5 mb-5">High-Tech and Most Advanced Equipment</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 mt-4">
        <div>
          <span class="icon_spanbooking"><i class="fa-solid fa-headset"></i></span>
          <p class="mt-5 mb-5">24/7 Customer service facility</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 mt-4">
        <div>
          <span class="icon_spanbooking"> <i class="fa-solid fa-thumbs-up"></i></span>
          <p class="mt-5 mb-5">Post service gurantee</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  </div>
  <!-- form -->
  <div class="container-fluid m-0 pt-5 pb-5 main_bg" id="form">


    <div class="form">
      <div class="form-text">
        <h1>Bo<span class="booking_heading">ok Your Desired Servi</span>ce</h1>
        <p>Please Fill up the form with correct infromation.</p>
      </div>
      <div class="main-form">
        <form action="" method="post">
          <div>
            <span>Your full name ?</span>
            <input type="text" value="<?php echo $_SESSION['name'] ?>" name="name" id="name" placeholder="Write your name here..." required>
          </div>
          <div>
            <span>Your email address ?</span>
            <input type="email" name="email" id="name" placeholder="Write your email here..." required value=<?php ?>>
          </div>
          <div>

            <!-- <---this is the select option--->
            <span>Select City</span>
            <select class="form-control mb-3" name="s_city" required>
              <option  selected><?php echo $city;echo $city_value; ?></option>
              <?php

              $select = "SELECT * FROM operated_cities";
              $go = mysqli_query($conn, $select);
              while ($row = mysqli_fetch_assoc($go)) {

              ?>
                <option><?php echo $row["city_name"] ?></option>
              <?php } ?>
            </select>
            <!-- <---this is the select option--->
          </div>

          <div>
            <span>Select Service</span>
            <select class="form-control mb-3" name="s_service" required>
              <option selected><?php echo $service;echo $service_value; ?></option>

              <?php

              $select = "SELECT * FROM services_offered";
              $show = mysqli_query($conn, $select);
              while ($row = mysqli_fetch_assoc($show)) {

              ?>
                <option><?php echo $row["service_name"] ?></option>
              <?php } ?>
            </select>
          </div>


          <div>
            <span>Your phone number ?</span>
            <input type="number" name="number" value="<?php echo $_SESSION['contact'] ?>" id="number" placeholder="Write your number here..." required>
          </div>


          <div>
            <span>Date of appoinment</span>
            <input type="date" name="date" id="date" placeholder="date" required>
          </div>


          <div class="big_input">
            <span>Your adderss </span>
            <input type="text" name="address" id="address" placeholder="Write your address here..." required>
          </div>


          <div class="big_input">
            <span>Discription</span>
            <input type="text" name="problem" id="address" placeholder="Write your description here..." required>
          </div>
          <div id="submit">
            <input type="submit" name="submit" value="Book My Service" id="submit">
          </div>


        </form>
      </div>
    </div>
  </div>



  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $s_city = $_POST['s_city'];
    $s_service = $_POST['s_service'];
    $date = $_POST['date'];
    $number = $_POST['number'];
    $adress = $_POST['address'];
    $problem = $_POST['problem'];

    $query = "INSERT INTO `client_booking` (`client_name`,`client_number`,`client_email`,`client_city`,`client_address`,`client_service`,`client_issue`,`client_bookingDate`) VALUES ('$name','$number','$email','$s_city','$adress','$s_service','$problem','$date')";
    $run = mysqli_query($conn, $query);
    if ($run) {
      echo "<script>swal('Booking Successfull', 'SETAS professionals are on the way', 'success');</script>";
    } else {
      echo "<script>swal('Booking Failed', 'Something went wrong while booking. Please try again !', 'error');</script>";
    }
  }


  ?>



<?php include "footer.php" ?>
