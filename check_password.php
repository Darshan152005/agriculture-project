<?php
include 'db.php'; // Database connection file

$email = "paresh123@gmail.com"; // Replace with the email you want to check
$password = "paresh12345"; //Replace with the password you used during registration

// Fetch the hashed password from the database

$query = "SELECT password FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt,"s","$email");
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    mysqli_stmt_bind_result($stmt,$hashed_password);
    mysqli_stmt_fetch($stmt);

    // Verify the hashed password
    if (password_verify($password,$hashed_password)) {
        echo "Password is correct !";
    }  else {
        echo "Password is incorrect !";
    }
    }  else {
        echo "No user found with this email !";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

?>

