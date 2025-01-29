<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-theme="light">
    <header>
        <div class="container">
            <h1>My Website</h1>
            <nav>
                <a href="index.php" class="nav-link">Home</a>
                <a href="login.php" class="nav-link">Login</a>
                <a href="signup.php" class="nav-link active">Sign Up</a>
                <a href="leaderboard.php" class="nav-link">Leaderboard</a>
                <button id="theme-toggle">Toggle Theme</button>
            </nav>
        </div>
    </header>
    <main>
        <section class="form-container signup-form">
            <h2>Sign Up</h2>
            <form action="signup_process.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Log in here</a></p>
        </section>
    </main>
</body>
</html>
