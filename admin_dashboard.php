<?php
session_start();
include 'db.php';

//Checked if user is logged in as admin
if (!isset($_SESSION["admin"])) {
   header("Location: admin_login.php");
    header("location:/project/admin_login.php");

    echo "Session is already destroyed. Redirecting...";
    exit();
}
// Fetch users
$query = "SELECT * FROM users";
$result =mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin-dashboard.css">
</head>
<body>
    <h1 style="text-align:center"> Manage</h1>
    <table>
        <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Action</th>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>";
              echo '<td><a href="delete_user.php?id=' .$row['id'].'">Delete</a></td>';
             echo        "</tr>";
        }
        ?>
    </table>    
    <!-- <td><a href='delete_user.php?id
                        ={$row['id']}'>Delete</a></td> -->
    <br>
    <a href="admin_logout.php" class="logout-btn">Logout</a>
    <a href="view_messages.php" class="message-btn">view_messages</a>
    <a href="manage_services.php" class="service-btn">Manage Service</a>
    </div>
    </body>
    </html>