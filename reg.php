<?php include("include\config.php"); 
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['pws'];
        $sql="insert into tbuser (uname,pwd) values ('$username','$password')";
        if($con->query($sql)===TRUE){
            header("location: login.php");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
?>
<html>
    <body>
        <br>
        <h1 align="center">Register Page</h1>
        <br>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="passwd" name="pws">
                </div>
                <br>
                <center><button type="submit" name='submit' class="btn btn-primary">Register</button></center>
            </form>
        </div>
        <center><p>Already an Admin? <a href="login.php">Log In</a></p></center>
    </body>
</html>