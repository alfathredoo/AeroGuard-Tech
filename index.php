
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Modern</title>
    <!-- Menghubungkan file HTML dengan file CSS luar -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form action="proses_login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
