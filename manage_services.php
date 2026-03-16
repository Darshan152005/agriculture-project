<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$query = "SELECT  * FROM user_service";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Services</title>
    <link rel="stylesheet" href="css/manage-services.css">
</head>
<body
    <h2>Selected Services</h2>gtt
    <table border=1>
        <tr>
            <th>User ID</th>
            <th>Service Name</th>
            <th>Requested At</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['service_name']; ?></td>
                <td><?php echo $row['requested_at']; ?></td>
        </tr>
        <?php } ?>
        </table> 
</body>
</html>