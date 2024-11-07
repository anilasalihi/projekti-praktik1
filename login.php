<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyrje - Menaxhimi i Detyrave</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Hyrje</h1>
    <form action="login_backend.php" method="POST">
        <label for="username">Përdoruesi</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Fjalëkalimi</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Hyr</button>
    </form>
    <a href="register.php">Nuk ke llogari? Regjistrohu këtu</a>
</div>
</body>
</html>
