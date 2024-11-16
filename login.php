<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="post" action="login.php">
        <h1>Login</h1>
        <div class="text-box">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="text-box">
        <input type="password" placeholder="Password" name="password">
        </div>
        <input type="submit" value="login" class="loginbtn" name="login_btn">
        <div>
            Don't have an account?
            <br>
            <a href="#">Sign up</a>
        </div>
    </form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost". "root"."");
if(isset($_POST('login_btn'))){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT = FROM websitelogin.LoginDetails WHERE username = '$username";
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row('password');
        if($password == $resultPassword)(
            header('Location:bamm.html');
        )else
        echo "<script>
        alert('fuck you');
        </script>";
    }
}
?>