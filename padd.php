<?php
    include("include\header.php");
    include("include\config.php");
    if(isset($_POST['submit'])){
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $category = $_POST['category'];
        $sql = "INSERT INTO tbproduct (pname,qty,price,category) VALUES ('$pname', '$qty', '$price', '$category')";
        if ($con->query($sql) === TRUE) {
            header("location: product.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<html>
<body>
<div style="padding: 20px;">
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="pname">Product Name:</label>
                <input type="text" class="form-control" id="pname" name="pname">
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="qty">Product Quantity:</label>
                <input type="text" class="form-control" id="qty" name="qty">
            </div>
            <div class="form-group">
                <label for="category">Product Category:</label>
                <select class="form-control" id="category" name="category">
                    <option value="Electronics">Electronics</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Books">Books</option>
                    <option value="Furniture">Furniture</option>
                </select>
            </div>
            <button type="submit" name='submit' class="btn btn-primary">Add Product</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='product.php'">Cancel</button>
        </form>
    </div>
</div>
</body>
</html>