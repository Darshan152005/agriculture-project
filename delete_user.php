<?php
session_start();
include 'db.php';

//Check if user is logged in as admin
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}

//check if the user ID is provided n the URL
if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']); //convert id to integer for security

    //prevent admin from deleteing themselves
    if ($user_id == $_SESSION['admin']){
        echo"you cannot delete your own acccount!";
        exit();
    }

    //delete the user from the databse
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,"i",$user_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user!";
    }

    mysqli_stmt_close($stmt);
}  else {
    echo "Invalid requst!";
}

// Redirect back to admin dashboard
header("Locaton: admin_dashboard.php");
exit();
?>     