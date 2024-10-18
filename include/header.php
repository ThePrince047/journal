<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        .navbar { display: flex; justify-content: space-between; align-items: center; background-color: #333; padding: 10px 20px; }
        .navbar .title, .navbar ul li a { color: white; font-size: 18px; text-decoration: none; }
        .navbar .title { font-size: 24px; font-weight: bold; }
        .navbar ul { list-style: none; display: flex; padding: 0; margin: 0; }
        .navbar ul li { margin: 0 15px; }
        .navbar ul li a:hover, .user-section:hover .user-btn { background-color: #444; }
        .navbar ul li a.active { color: yellow; }
        .user-section { position: relative; }
        .user-btn { background-color: #333; color: white; border: none; cursor: pointer; font-size: 18px; }
        .dropdown-content { display: none; position: absolute; right: 0; background-color: #f9f9f9; min-width: 120px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); z-index: 1; }
        .dropdown-content a { color: black; padding: 10px; display: block; }
        .dropdown-content a:hover { background-color: #ddd; }
        .user-section:hover .dropdown-content { display: block; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">Inventory Management</div>
        <ul>
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="product.php" class="<?= basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : '' ?>">Manage Product</a></li>
            <li><a href="aboutus.php" class="<?= basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'active' : '' ?>">About Us</a></li>
        </ul>
        <div class="user-section">
            <button class="user-btn">
                <?= isset($_SESSION['username']) ? "Hi, " . $_SESSION['username'] : "Admin" ?> ▼
            </button>
            <div class="dropdown-content">
                <a href="login.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>