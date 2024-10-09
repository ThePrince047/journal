<?php
    include("include/header.php");
    include("include/config.php");
    $results_per_page = 7;

    $sql = "SELECT COUNT(*) AS total FROM tbproduct";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $total_records = $row['total'];
    $total_pages = ceil($total_records / $results_per_page);
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $starting_limit = ($page - 1) * $results_per_page;
    $sql = "SELECT * FROM tbproduct LIMIT $starting_limit, $results_per_page";
    $result = $con->query($sql);
?>

<html>
    <script>
        function deleteProduct(id) {
            if (confirm("Are you sure you want to delete this product?")) {
                window.location = 'pdelete.php?id=' + id;
            }else{
                window.location = 'product.php';
            }
        }
    </script>
<body>
<div style="padding: 20px;">
    <a href="padd.php" class="btn btn-primary">Add Product</a>
    <br>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['pid'] . "</td>";
                    echo "<td>" . $row['pname'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['qty'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>";
                    echo "<a href='pedit.php?id=". $row['pid']."' class='btn btn-success'>Edit</a> | ";
                    echo "<a href='#' onclick='deleteProduct(" . $row['pid'] . ")' class='btn btn-danger'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No products found</td></tr>";
            }
        ?>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="product.php?page=' . ($page - 1) . '">Previous</a></li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="product.php?page=' . $i . '">' . $i . '</a></li>';
                }
            }
            if ($page < $total_pages) {
                echo '<li class="page-item"><a class="page-link" href="product.php?page=' . ($page + 1) . '">Next</a></li>';
            }
            ?>
        </ul>
    </nav>
    <marquee behavior="alternate">Made By Prince Solanki</marquee>
</div>
</body>
</html>
