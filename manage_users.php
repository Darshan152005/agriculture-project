<?php
session_start();
include("db.php");

if (!isset($_SESSON['admin]'])) {
    header("Location: admin_login.php");
    exit();
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Users</title>
</head>
<body>
    <h2>Registerdt Users</h2>
    <table border="1">
        <tr>
            <th>ID</tr>
            <th>Email</tr>
            <th>Action</tr>
        </tr>
        <?php while ($row= mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><a href="delete_user.php?id=<?php 
            echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
        </table> 
</body>
</html>