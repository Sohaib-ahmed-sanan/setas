<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "../config.php" ?>

  <!--  -->

<div class="container-fluid">
    <?php
    
    if(isset($_GET['Id'])){
        $id = $_GET['Id'];
        $query = " UPDATE `client_booking` SET `splitor`= 2 WHERE client_id = $id ";
        $run = mysqli_query($conn, $query);
    }

    ?>
</div>


<div class="container-fluid text-center pt-4 pb-3">
    <h1>Confirmed Orders</h1>
    <p>Following are the latest new Confirmed orders.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Number</th>
                <th>Service Booked</th>
                <th>City</th>
                <th>Address</th>
                <th>Date of Visit</th>
                <th>Clients Problem</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>

            <?php
            
            // select from db
            
            $select = "SELECT * FROM `client_booking` where `splitor` = 1";
            $triger = mysqli_query($conn, $select);
            
            $i = 0;
            while ($row = mysqli_fetch_assoc($triger)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["client_name"] ?></td>
                    <td><?php echo $row["client_number"] ?></td>
                    <td><?php echo $row["client_service"] ?></td>
                    <td><?php echo $row["client_city"] ?></td>
                    <td><?php echo $row["client_address"] ?></td>
                    <td><?php echo $row["client_bookingDate"] ?></td>
                    <td><?php echo $row["client_issue"] ?></td>
                    <td>
                        <a href="confirm_order.php?Id=<?php echo $row["client_id"] ?>" class="btn btn-danger mt-1">Reject</a>
                    </td>
                </tr>
            <?php $i++;
            } ; ?>
        </tbody>
    </table>

</div>


<?php include "footer.php" ?>