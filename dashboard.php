<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulti - Menaxhimi i Detyrave</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Pulti i Detyrave</h1>
    <p>Mirsevini, <?php echo $_SESSION['username']; ?>!</p>
    <a href="create_task.php">Krijo Detyrë të Re</a>
    <a href="logout.php">Dil</a>
</div>
</body>
</html>
