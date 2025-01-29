<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-theme="light">
    <header>
        <div class="container">
            <h1>My Website</h1>
            <nav>
                <a href="index.php" class="nav-link">Home</a>
                <a href="login.php" class="nav-link active">Login</a>
                <a href="leaderboard.php" class="nav-link">Leaderboard</a>
                <button id="theme-toggle">Toggle Theme</button>
            </nav>
        </div>
    </header>
    <main>
        <section class="form-container login-form">
            <h2>Login</h2>
            <form action="login_process.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </section>
    </main>
</body>
</html>
