<!DOCTYPE html>
<html lang="en">        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .review-form {
            margin-bottom: 20px;
        }
        .review-form textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .review-form input[type="submit"] {
            background-color: #A8CBBD;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .review-form input[type="submit"]:hover {
            background-color: #A0522D;
        }
        .reviews {
            margin-top: 20px;
        }
        .reviews h3 {
            font-size: 28px;
            color: #333;
        }
        .review {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }
        .review img {
            width: 100%;
            max-width: 200px;
            display: block;
            margin: 10px 0;
        }
        .review p {
            margin: 0;
        }
        .review .rating {
            color: #FFD700;
        }
    </style>
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images\logo.jpg" alt="Braided by Jay Logo"></a>
        </div>
        <div class="search-bar">
            <form action="search_results.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="icons">
        <a href="favorites.php"><img src="images\favorites icon.jpg" alt="Favorites"></a>
            <a href="cart.php"><img src="images\cart.jpg" alt="Cart"></a>
            <a href="contact.php"><img src="images\phone icon.png" alt="Phone"></a>
            <a href="Logout.php"><img src="images\logout.jpg" alt="Logout"></a>

        </div>
    </header>

    <!-- Main content section -->
    <div class="main-content">
        <h2>Reviews</h2>

        <!-- Display Reviews -->
        <div class="reviews">
            <h3>Recent Reviews</h3>
            <div class="review">
                <p><strong>Jane Doe</strong></p>
                <p class="rating">★★★★★</p>
                <h4>Short Straight Back with Beads</h4>
                <img src="images\shortstraightback.jpg" alt="Short Straight Back with Beads">
                <p>Beautiful style with added beads at the ends. Very Creative!! - Jane Doe</p>
            </div>
            <div class="review">
                <p><strong>Sarah Smith</strong></p>
                <p class="rating">★★★★★</p>
                <h4>Fulani Braids</h4>
                <img src="images\straightfulani.jpg" alt="Fulani Braids">
                <p>Amazing Fulani braids. Loved it! - Sarah Smith</p>
            </div>
            <div class="review">
                <p><strong>Emily Johnson</strong></p>
                <p class="rating">★★★★★</p>
                <h4>Knotless Braids</h4>
                <img src="images\knotlessmedium.jpg" alt="Knotless Braids">
                <p>Perfect knotless braids, very light and comfortable. - Emily Johnson</p>
            </div>
        </div>

        <!-- Review Form -->
        <div class="review-form">
            <h3>Write a Review</h3>
            <form action="submitreview" method="POST">
                <textarea name="review" placeholder="Write your review here"></textarea>
                <label for="rating">Rating:</label>
                <select name="rating" id="rating">
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="1">★☆☆☆☆</option>
                </select>
                <br>
                <input type="submit" value="Submit Review">
            </form>
        </div>
    </div>

   <!-- Navigation buttons -->
   <div class="nav-buttons">
        <button onclick="location.href='Homepage.php'">
            <img src="images\homepage.jpg" alt="Home" class="nav-icon">Homepage
        </button>
        <button onclick="location.href='Services.php'">
            <img src="images\services.jpg" alt="Services" class="nav-icon">Services
        </button>
        <button onclick="location.href='Bookings.php'">
            <img src="images\bookings.jpg" alt="Bookings" class="nav-icon">Bookings
        </button>
        <button onclick="location.href='Products.php'">
            <img src="images\products.jpg" alt="Products" class="nav-icon">Products
        </button>
        <button onclick="location.href='AboutUs.php'">
            <img src="images\aboutus.jpg" alt="About Us" class="nav-icon">About Us
        </button>
        <button onclick="location.href='Reviews.php'">
            <img src="images\reviews.jpg" alt="Reviews" class="nav-icon">Reviews
        </button>
    </div>
</body>
</html>
