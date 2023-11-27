<?php
session_start();
if(isset($_SESSION["user"])){
   header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style-registration-login.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["login"])){
            require_once "database.php";
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password is incorrect!</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email not found in our database!</div>";
            }
        }




        ?>
        <form action="login.php" method="post">
            <div class="text-center text-primary"><h1>Login Here</h1></div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Your Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input class="btn btn-primary" type="submit" value="Login" name="login">
            </div>
        </form>
        <div><p>Don't have an account? <a href="registration.php">Register Now!</a></p></div>
    </div>
    
</body>
</html>