<?php
session_start(); // Start the session to access session variables
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navigation bar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }

        /* Title styling */
        .navbar .title {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        /* Navigation links styling */
        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        .navbar ul li a:hover {
            color: #ddd;
        }

        /* Active class styling for highlighting */
        .navbar ul li a.active {
            color: yellow; /* Highlight the active link */
        }

        /* User section styling */
        .user-section {
            position: relative;
            display: inline-block;
        }

        .user-section .user-btn {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .user-section .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .user-section .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }

        .user-section .dropdown-content a:hover {
            background-color: #ddd;
        }

        .user-section:hover .dropdown-content {
            display: block;
        }

        .user-section:hover .user-btn {
            background-color: #444;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <!-- Project Title -->
        <div class="title">Inventory Management</div>

        <!-- Navigation Links -->
        <ul>
            <li><a href="index.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>">Home</a></li>
            <li><a href="product.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'product.php'){echo 'active';} ?>">Manage Product</a></li>
            <li><a href="aboutus.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'aboutus.php'){echo 'active';} ?>">About Us</a></li>
        </ul>

        <!-- User Section -->
        <div class="user-section">
            <button class="user-btn">
                <?php
                // Display the admin's name if the session is set
                if (isset($_SESSION['username'])) {
                    echo "Hi, " . $_SESSION['username'];
                } else {
                    echo "Admin";
                }
                ?> ▼
            </button>
            <div class="dropdown-content">
                <a href="login.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
