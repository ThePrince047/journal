<?php
    include("include/header.php");
    include("include/config.php");
    if (isset($_POST['submit'])) {
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $category = $_POST['category'];
        $sql = "INSERT INTO tbproduct (pname, qty, price, category) VALUES ('$pname', '$qty', '$price', '$category')";
        if ($con->query($sql)) header("location: product.php");
        else echo "Error: " . $sql . "<br>" . $con->error;
    }
?>
<html>
<body>
<div style="padding: 20px;">
    <form method="POST">
        <label for="pname">Product Name:</label>
        <input type="text" id="pname" name="pname" class="form-control">
        <label for="price">Product Price:</label>
        <input type="text" id="price" name="price" class="form-control">
        <label for="qty">Product Quantity:</label>
        <input type="text" id="qty" name="qty" class="form-control">
        <label for="category">Product Category:</label>
        <select id="category" name="category" class="form-control">
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Books">Books</option>
            <option value="Furniture">Furniture</option>
        </select>
        <button type="submit" name='submit' class="btn btn-primary">Add Product</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='product.php'">Cancel</button>
    </form>
</div>
</body>
</html>