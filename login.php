<?php 
    include "../service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        // echo $username;
        $password = $_POST['password'];
        // echo $password; 
    }

    if($db->connect_error){
        echo "koneksi dataase error";
        die('error!');
    } 

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AeroGuard Tech</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-wrapper">
        <!-- <h1 class="brand-tittle">InJourney Angkasa Pura</h1> -->
        <img src="pic/logo.png" alt="Logo" height="100px" width="300">
        <br>
        <div class="login-card">
            <h2>Welcome AeroGuard Tech</h2>
            <p>Silakan masuk ke akun Anda</p>
            <!-- Form Box Username & Password -->
            <form action="login.php" method="POST">
                <div class="input-field">
                    <input type="text" placeholder="Username" name="username"/>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password"/>
                </div>
                <button type="submit" class="login-btn" name="login">Masuk</button>
            </form>
            <div class="footer-link">
                Belum punya akun? <a href="register.php">Daftar sekarang</a>
            </div>
        </div>
        <br>
         <?php include "layout/footer.html";?>
    </div>
</body>
</html>
