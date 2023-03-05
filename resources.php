<?php 

if(isset($_POST['home_form'])){
    session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['contact'] = $_POST['contact'];
$_SESSION['city']=$_POST['city'];
$_SESSION['service'] = $_POST['service'];

    header("location:booking.php?n#form");
}else{
    session_unset();
}
?>
