<?php 
session_start();
include 'db.php';

// Ensure the users is logged in
if(!isset($_SESSION['user_id'])){
    die("Error: You must log in first");
}

$user_id=$_SESSION['user_id']; // Get logged in user ID
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Service</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            font-family: Arial, sans-serif;
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }
        .container {
            max-width: 600px;
            background: rgba(0 ,0 ,0.7);
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
        }
        h2 {
            color: #4CAF50;
        }
        .services-list {
            text-align:left;
        }
        .services-list label {
            display: block;
            margin: 5px 0;
        }
        .btn {
            background: #4CAF50;
            color: white;
            padding:10px 15px;
            border:none;
            cursor: pointer;
            margin-top:10px;
        }
        .btn:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submit Services for More Information </h2> 
        <form action="submit_services.php" method="POST">
            <!-- Pass the user ID securely--->
          <input type="hidden" name="user_id" value="<?php echo $user_id?>">

             <div class="services-list">
                <label><input type="checkbox" name="services[]" value="Soil Testing">Soil Testing</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Irrigation System Installation</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Organic Farming</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Pest & Disease Management</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Agricultural Equipment Rental </label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Greenhouse Farming </label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Dairy Farm</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Farm Planning & Management</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Agroforestry Services</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Fertilizer & Seed Supply</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Precision Farming with Drones </label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Weather & Climate Advisory</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Smart Farming & IoT Solutions</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Agricultural Training & Workshops</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Crop Insurance & Financial Advisory </label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Livestock Health & Veterinary Services</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Fertilizer & Seed Supply</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Composting & Waste Management</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Agroforestry Services</label>
                <label><input type="checkbox" name="services[]" value="Soil Testing">Beekeeping & Honey Production</label>
            </div>


            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    </body>
</html>