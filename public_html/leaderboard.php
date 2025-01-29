<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        /* Add styles for the leaderboard table */
        .leaderboard-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
        }

        .leaderboard-table thead tr {
            background-color: #f4f4f4;
            color: #333;
            text-align: left;
        }

        .leaderboard-table th, .leaderboard-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .leaderboard-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .leaderboard-table tbody tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }

        .leaderboard-table tbody tr:last-of-type {
            border-bottom: 2px solid #333;
        }
    </style>
</head>
<body data-theme="light">
    <header>
        <div class="container">
            <h1>My Website</h1>
            <nav>
                <a href="index.php" class="nav-link">Home</a>
                <a href="login.php" class="nav-link">Login</a>
                <a href="leaderboard.php" class="nav-link active">Leaderboard</a>
                <button id="theme-toggle">Toggle Theme</button>
            </nav>
        </div>
    </header>
    <main>
        <section class="leaderboard">
            <h2>Leaderboard</h2>
            <p>Here are the top users with their scores:</p>
            <table class="leaderboard-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Username</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>User1</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>User2</td>
                        <td>900</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>User3</td>
                        <td>850</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
