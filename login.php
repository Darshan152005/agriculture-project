<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    //Check if email exists
    $query = "SELECT id, name, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt,$id,$name, $hashed_password);
        mysqli_stmt_fetch($stmt);

        //Verify the password
     if (password_verify($password,$hashed_password)) {
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $name;
    echo "Login successful ! Redirecting...";
    header("refresh:2; url=index1.php"); // Redirect to Dashboard
    exit();
     } else {
        echo "Invalid Email or Password !";
     }
     }  else{
        echo "user not found !";
     }
       mysqli_stmt_close($stmt);
       mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h2>Login</h2>

        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Login</button>
        <p> Don't have an account ? <a href="register.php">Register</a></p>
</form>
</body>
</html>