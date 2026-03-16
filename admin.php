//admin.php - admin Panel (view Users & Services)
<?php
include("db.php");
$query="SELECT * FROM users";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) { 
    echo "User :" .$row['name']."Email" .$row['email']. "<br>";
}
?>