<?php
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "123"){
        session_start();
        $_SESSION["user"] = "admin";
        header("Location:index.php");
        
    }else{
        header("Location: index.php?error=1");
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            display: none;
        }
        .login-form {
            background-color: #f7f7f7;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5" style="max-width:600px">
        <div class="login-form">
            <!-- Error message placeholder -->
            <?php if (isset($_GET['error'])): ?>
                <div class="error-message" id="errorMessage">
                    Invalid username or password. Please try again.
                </div>
            <?php endif; ?>

            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-field mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary w-100" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

