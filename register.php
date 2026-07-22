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
            <p>Silakan Daftar Akun</p>
            <form>
                <div class="input-field">
                    <input type="text" placeholder="Unsername">
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-btn">Buat Akun</button>
            </form>
        </div>
        <br>
        <?php include "layout/footer.html"; ?>
    </div>
</body>
</html>
