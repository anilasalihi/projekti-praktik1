<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrohu - Menaxhimi i Detyrave</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Regjistrohu</h1>
    <form action="register_backend.php" method="POST">
        <label for="username">Përdoruesi</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Fjalëkalimi</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Regjistrohu</button>
    </form>
    <a href="login.php">Ke një llogari? Hyr këtu</a>
</div>
</body>
</html>
