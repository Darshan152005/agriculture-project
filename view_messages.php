<?php
include("db.php");

$result = mysqli_query($conn,"SELECT * FROM contact_messages ORDER BY submitted_at DESC");

?>

<!DOCTYPE html>
<html>
<head>
    <title>contact messages</title>
    <link rel="stylesheet" href="css/contact-messages.css">
</head>
<body>
    <h2 style="text-align:center;">contact Messages</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Submitted At</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($result))
        { ?>
        <tr>
            <td> <?php echo $row['id']; ?></td>
            <td> <?php echo $row['full_name']; ?></td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['phone']; ?></td>
            <td> <?php echo $row['message']; ?></td>
            <td> <?php echo $row['submitted_at']; ?></td>
        </tr>
        <?php }?>
        </table>
    
</body>
</html>