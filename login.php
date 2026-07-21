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
            <form>
                <div class="input-field">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-btn">Masuk</button>
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
