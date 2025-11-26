<?php
session_start();
require_once("Employee.php");

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $employeeObj = new Employee();
    $result = $employeeObj->check_login($email,$password);
    //die(var_dump($result));
    if ($result) {
       $_SESSION['user_id'] = $result->id;
       $_SESSION['username'] = $result->name;
       $_SESSION['email'] = $result->email;
       $_SESSION['role'] = $result->role_id;
       header("Location: index.php");
       exit;
    }else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DreamHR</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-card fade-in">
            <div class="header">
                <div class="logo">
                    <span class="logo-icon">🌸</span>
                    <h1>Welcome Back</h1>
                </div>
                <p class="subtitle">Sign in to your dreamy workspace</p>
            </div>
            
            <form id="loginForm" class="login-form" method="POST" >
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                    <span class="input-focus"></span>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <span class="input-focus"></span>
                </div>
                
                <!-- <div class="form-options">
                    <label class="checkbox-container">
                        <input type="checkbox" id="remember">
                        <span class="checkmark"></span>
                        Remember me
                    </label>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div> -->
                
                <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
                
                <!-- <div class="divider">
                    <span>or</span>
                </div>
                
                <div class="auth-links">
                    <p>Don't have an account? <a href="register.html">Sign up</a></p>
                    <a href="index.html" class="back-home">← Back to Home</a>
                </div> -->
            </form>
        </div>
    </div>
    <!-- <script src="login.js"></script> -->
</body>
</html>
