<?php
error_reporting();
ini_set('display_errors',1);

include 'db.php';

if($_SERVER["REQUEST_METHOD"]== "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    if (empty($name) || empty($email) || empty($password) ||
    empty($confirm_password)) {
        echo "all fields are required!" ;
        exit;
    }
    //check if password match
    if($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    //check if email already exists
    $check_email = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn,$check_email);
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "Email already exists! please use another email.";
        exit;
    }

    mysqli_stmt_close($stmt);

    // hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //Inser into database
    $query = "INSERT INTO users (name,email,password) VALUES (? , ? , ?)";
    $stmt = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Registration succesful!";
    } else {
        echo "Error:" . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h2>Register</h2>
        <input type="text" name="name" placeholder="Enter name" required><br>
        <input type="email" name="email" placeholder="Enter email" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <input type="password" name="confirm_password" placeholder="confirm_password" required><br>
        <button type="submit">Register</button>
        <p> Already have an account ? <a href="login.php">Login</a></p>
</form>
</body>
</html>



