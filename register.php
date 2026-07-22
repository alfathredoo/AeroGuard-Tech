<?php 
    include '../service/database.php';

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (usernames"
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-wrapper">
        <!-- <h1 class="brand-tittle">InJourney Angkasa Pura</h1> -->
        <img src="pic/logo.png" alt="Logo" height="100px" width="300">
        <br>
        <div class="login-card">
            <h2>Welcome AeroGuard Tech</h2>
            <p>Silakan daftar akun anda!</p>
            <!-- form Username & Password -->
            <form action="register.php" method="POST">
                <div class="input-field">
                    <input type="text" placeholder="Username" name="username"/>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password"/>
                </div>
                <button type="submit" class="login-btn">Buat akun</button>
            </form>
        </div>
        <br>
        <?php include "layout/footer.html"; ?>
    </div>
</body>
</html>
