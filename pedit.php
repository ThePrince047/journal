<?php
    include("include/header.php");
    include("include/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbproduct WHERE pid = $id";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pname = $row['pname'];
            $price = $row['price'];
            $qty = $row['qty'];
            $category = $row['category'];
        } else {
            echo "No product found.";
            exit();
        }
    }
    if(isset($_POST['submit'])){
        $pname = $con->real_escape_string($_POST['pname']);
        $price = $con->real_escape_string($_POST['price']);
        $qty = $con->real_escape_string($_POST['qty']);
        $category = $con->real_escape_string($_POST['category']);
        $query = "UPDATE tbproduct SET pname='$pname', qty='$qty', price='$price', category='$category' WHERE pid='$id'";
        if ($con->query($query) === TRUE) {
            header("Location: product.php");
            exit();  // Exit after redirection
        } else {
            echo "Error: " . $con->error;
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
                <input type="text" class="form-control" id="pname" name="pname" value="<?php echo htmlspecialchars($pname); ?>">
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>">
            </div>
            <div class="form-group">
                <label for="qty">Product Quantity:</label>
                <input type="text" class="form-control" id="qty" name="qty" value="<?php echo htmlspecialchars($qty); ?>">
            </div>
            <div class="form-group">
                <label for="category">Product Category:</label>
                <select class="form-control" id="category" name="category">
                    <option value="Electronics" <?php if ($category == 'Electronics') echo 'selected'; ?>>Electronics</option>
                    <option value="Clothing" <?php if ($category == 'Clothing') echo 'selected'; ?>>Clothing</option>
                    <option value="Books" <?php if ($category == 'Books') echo 'selected'; ?>>Books</option>
                    <option value="Furniture" <?php if ($category == 'Furniture') echo 'selected'; ?>>Furniture</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Edit</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='product.php'">Cancel</button>
        </form>
    </div>
</div>
</body>
</html>