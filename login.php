<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <img src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg">
        <form method="POST" action="login_action.php">
            <div class="form-input">
                <input type="text" name="username" placeholder="Username" autofocus />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login" />
            <!-- <a href="Admin_Panel/loginadmin.php">Login as admin</a>
            <input type="submit" name="admin" value="ADMIN" class="btn-login"> -->
            <br>
            <br>
            <a href="signup_user.php">Don't have any account?</a>
        </form>
    </div>
</body>

</html>