<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query =  "SELECT * FROM admin  WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    // $admin = mysqli_fetch_assoc($result);

    // if ($admin && password_verify($_POST["password"],$admin["password"])) {
    //     $_SESSION["admin"] = $admin["id"];
    //     header("Location: admin_dashboard.php");
    // } else {
    //     echo "Invalid username or password !";
    // }

    if($result->num_rows == 1){
        $_SESSION['admin']=$username;
        echo "<script>alert('Login Successfully');
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script>alert('Invalid username or Password');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/admin-login.css">
</head>
<body>
    <h2>Admin Login</h2>
    <form action="admin_login.php" method="POST">
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" required placeholder="Enter Password"><br>

        <button type="submit">Login</button>
    </form>       
</body>
</html>
