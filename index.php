<?php
    include("include\header.php");
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>

<html>
<head>
    <style>
        /* Container for the image rotator */
        .image-rotator {
            position: relative;
            max-width: 100%; /* Adjust the width to fit your layout */
            height: 400px; /* Adjust the height as needed */
            overflow: hidden;
        }

        /* Images inside the rotator */
        .image-rotator img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Active image class */
        .image-rotator img.active {
            opacity: 1;
        }
    </style>
</head>
<body>
<div style="padding: 20px;">
    <!-- Image Rotator -->
    <div class="image-rotator">
        <img src="images\i1.jpg" class="active" alt="Image 1">
        <img src="images\i2.jpg" alt="Image 2">
        <img src="images\i3.jpg" alt="Image 3">
        <img src="images\i4.jpg" alt="Image 4">
    </div>

    <script>
        // JavaScript for rotating images every 3 seconds
        let currentIndex = 0;
        const images = document.querySelectorAll('.image-rotator img');
        const totalImages = images.length;

        function rotateImages() {
            // Remove the active class from the current image
            images[currentIndex].classList.remove('active');

            // Update index to the next image
            currentIndex = (currentIndex + 1) % totalImages;

            // Add the active class to the new image
            images[currentIndex].classList.add('active');
        }

        // Rotate images every 3 seconds (3000 ms)
        setInterval(rotateImages, 3000);
    </script>
    <h1>Welcome to Inventory Management System</h1>
    <p>This is a simple inventory management system that allows you to manage products and categories.</p>
    <p>It is built using PHP, MySQL, and Bootstrap.</p>
    <p>Click on the links above to manage products and categories.</p>
    <p>Click on the "Admin" button to logout.</p>
</div>
<marquee behavior="scroll" direction="left">Made By Prince Solanki</marquee>
</body>
</html>
