<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "../config.php" ?>
<?php
$query = "SELECT * FROM `admin_login`";
$go = mysqli_query($conn, $query);
$show = mysqli_fetch_assoc($go); 

if (isset($_POST['update'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $cur_pass = mysqli_real_escape_string($conn, $_POST['cur_pass']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $retype_pass = mysqli_real_escape_string($conn, $_POST['retype_pass']);
    $check = "SELECT * FROM `admin_login` WHERE admin_username = '$uname' AND admin_pasword = '$cur_pass'";
    $res = mysqli_query($conn, $check); 
    
    if ($new_pass == $retype_pass) {
        $hashed_new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
        $update = "UPDATE `admin_login` SET `admin_username`='$uname',`admin_pasword`='$hashed_new_pass' WHERE id = 1";
        $run = mysqli_query($conn, $update);
        if (!$run) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }
    } else {
        echo "<script> alert('Please type correct new password'); </script>"; 
    }
}

?>

<div class="container-fluid">
    <div class="pt-5" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="profile mb-3" style="width: 150px;">
            <img src="../images/profile.jpg" alt="Users image" width="100% ">
        </div>
        <h2 class="text-center"><?php echo $show['admin_username'] ?></h2>
        <h3 class="text-center">Welcome To SETAS profile</h3>
    </div>
</div>
<div class="container-fluid mt-4 pb-5">
    <div>
        <h5 class="text-center">My account settings</h5>
        <div style="width:60%;">
            <form action="" method="post">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required placeholder="Username" value="<?php echo $show['admin_username'] ?>">
                </div>
                <div>
                    <label>Current Password</label>
                    <input type="password" name="cur_pass" required class="form-control" placeholder="Current Password">
                </div>
                <div>
                    <label>New Password</label>
                    <input type="password" name="new_pass" required class="form-control" placeholder="New Password">
                </div>
                <div>
                    <label>Re-type Password</label>
                    <input type="password" name="retype_pass"  required class="form-control" placeholder="Retype Password">
                </div>
                <div>
                    <input type="submit" name="update" value="Update" class="btn btn-success mt-4">
                </div>
            </form>
        </div>

    </div>
</div>


<?php include "footer.php" ?>