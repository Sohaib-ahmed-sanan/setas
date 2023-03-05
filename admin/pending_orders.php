<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<?php include "../config.php" ?>

<?php
$query = "SELECT * FROM `client_booking` where splitor = 0  ORDER BY `client_id` DESC";
$run = mysqli_query($conn, $query);

?>

<div class="container-fluid text-center pt-4 pb-3">
    <h1>Pending Orders</h1>
    <p>Following are the latest new orders.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Service Booked</th>
                <th>City</th>
                <th>Address</th>
                <th>Date of Visit</th>
                <th>Clients Problem</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>

            <?php $i = 0;
            while ($row = mysqli_fetch_assoc($run)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["client_service"] ?></td>
                    <td><?php echo $row["client_city"] ?></td>
                    <td><?php echo $row["client_address"] ?></td>
                    <td><?php echo $row["client_bookingDate"] ?></td>
                    <td><?php echo $row["client_issue"] ?></td>
                    <td>
                        <a href="confirm_order.php?Id=<?php echo $row["client_id"] ?>" class="btn btn-success">Confirm</a> <a href="reject_order.php?Id=<?php echo $row["client_id"] ?>" class="btn btn-danger mt-1">Reject</a>
                    </td>
                </tr>
            <?php $i++;
            }
            ; ?>
        </tbody>
    </table>

</div>




<?php include "footer.php" ?>