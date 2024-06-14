<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Braided by Jay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Container for the entire page content -->
    <div class="container">
        <!-- Header section with logo, search bar, and icons -->
        <header>
            <div class="logo">
                <!-- Logo links back to homepage -->
                <a href="index.php"><img src="logo.jpg" alt="Braided by Jay Logo"></a>
            </div>
            <!-- Search bar allows users to search for products/services -->
            <div class="search-bar">
                <form action="search_results.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <!-- Icons for favorites, cart, and contact -->
            <div class="icons">
            <a href="favorites.php"><img src="favorites icon.jpg" alt="Favorites"></a>
            <a href="cart.php"><img src="cart.jpg" alt="Cart"></a>
           <a href="profile.php"><img src="profile.jpg" alt="Profile"></a>
        </div>
            </div>
        </header>

        <!-- Login section -->
        <section class="login-section">
            <h2>Login</h2>
            <!-- Login form -->
            <form action="login_process.php" method="POST">
                <!-- Email input field -->
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <!-- Password input field -->
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <!-- Submit button for logging in -->
                <button type="submit">Login</button>
            </form>
            <!-- Link to registration page for new users -->
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </section>
    </div>
</body>
</html>
