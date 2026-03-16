<?php
include 'db.php'; //ensure ths file has a valid connection to mysql

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validate inputs
    if(empty($_POST['user_id']) || empty($_POST['services'])){
        die("Error: User ID and Services are required.");
    
}
    $user_id = intval($_POST['user_id']); //Convert to integer for security
    $services = $_POST['services']; //Array of selected services

    //Prepare and insert each service into the database
    foreach ($services as $service) {
        $service_name = mysqli_real_escape_string($conn,$service);
        $query = "INSERT INTO user_service (user_id,service_name) VALUES ('$user_id','$service_name')";

        if (!mysqli_query($conn,$query)) {
            die("Database Error:". mysqli_error($conn)); //Debugging Purpose
        }
    }

    echo " service selectef successfully!";
} else {                                                   
    echo "Invalid request!";
}
?>
























