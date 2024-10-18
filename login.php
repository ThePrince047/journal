<?php
    include("include\config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['pws'];
        $sql = "SELECT * FROM tbuser WHERE uname = '$username' AND pwd = '$password'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("location: index.php");
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
        }
    }
?>
<html>
    <body><br>
        <h1 align="center">Login Page</h1><br>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="passwd" name="pws">
                </div><br>
                <center><button type="submit" name='submit' class="btn btn-primary">Login</button></center>
            </form>
        </div>
        <center><p>Are Your New Admin? <a href="reg.php">Register</a></p></center>
    </body>
</html>