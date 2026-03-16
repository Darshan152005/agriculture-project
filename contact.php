<?php
// error_reporting(E_ALL);
// ini_set('display_errors',1);
include 'db.php'; //Make sure this file correctly connects to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    // $name = htmlspecialchars(strip_tags(trim($_POST["Name"])));
    // $email = filter_var($_POST["Email"], FILTER_SANTIZE_EMAIL);
    // $phone =htmlspecialchars(strip_tags(trim($_POST["Phone"])));
    // $message = htmlspecialchars(strip_tags(trim($_POST["Message"])));

    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $message=$_POST['Message'];

    // Validate fields

//     if (empty($name) || empty($email) || empty($message)) { 
//         echo "<script>alert('Name,Email, and Message are required !'); window.history.back();</script>";
//         exit;
//    }

    // if (!filter_var($email,FILTER_VALDATE_EMAIL)) {
    //     echo "<script>alert('Invalid email address!'); window.history.back();</script>";
    //     exit();
    // }
    
    //Correcting table name
    $sql = "INSERT INTO contact_messages (full_name, email ,phone , message) VALUES ('$name','$email','$phone','$message')";
    // $result=mysqli_query($conn,$sql);
    
    //prepare statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // $stmt->bind_param("ssss",$name, $email, $phone ,$message);

        if ($stmt->execute()) {
            echo "<script> alert('your message has been stored successfully !');
            header('Location: index1.html');
            exit();</script>";
            //window.location.href='contact.html';</script>";
        } else {
            echo "<script>alert('database error: Unable to store message.');</script>";
            // window.history.back();</script>";
        }
        
        $stmt->close();
    } else {
        echo "<script>alert('database error: Failed to prepare statement.'); </script>";
        //window.history.back();</script>";
    }
    
    $conn->close();
} else {
    echo "<script>alert('Invalid request'); window.history.back();</script>";
}
?>