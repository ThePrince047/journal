<?php
    include("include/header.php");
    if (!isset($_SESSION['username'])) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <style>
        .image-rotator { position: relative; width: 100%; height: 400px; overflow: hidden; }
        .image-rotator img { position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out; }
        .image-rotator img.active { opacity: 1; }
    </style>
</head>
<body>
    <div style="padding: 20px;">
        <div class="image-rotator">
            <img src="images/i1.jpg" class="active" alt="Image 1">
            <img src="images/i2.jpg" alt="Image 2">
            <img src="images/i3.jpg" alt="Image 3">
            <img src="images/i4.jpg" alt="Image 4">
        </div>
        <script>
            let currentIndex = 0, images = document.querySelectorAll('.image-rotator img'), totalImages = images.length;
            setInterval(() => { images[currentIndex].classList.remove('active'); currentIndex = (currentIndex + 1) % totalImages; images[currentIndex].classList.add('active'); }, 3000);
        </script>
        <h1>Welcome to Inventory Management System</h1>
        <p>Manage your products and categories efficiently with this simple system built using PHP and MySQL.</p>
        <p>Click the links above to explore product and category management. Use the "Admin" button to logout.</p>
    </div>
    <marquee behavior="scroll" direction="left">Made By Prince Solanki</marquee>
</body>
</html>