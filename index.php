<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Trang đáng ghéc</title>
        <link rel="stylesheet" href="styles2.css">
    </head>
    <body>
        <div id="signin">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>USERNAME</label> <br> 
                <input name="username" type="text" placeholder="Enter username" size="40">
                <br>
                <br>
                <label>PASSWORD</label> <br> 
                <input name="password" type="password" placeholder="Enter password" size="40">
                <br> <br>
                <button type="submit" style="width: 302px; height: 40px;">Login</button>
            </form>
        </div>
        <div id="signup">
            <h1>Welcome to Trang dan ghec</h1>
            <h2>Don't have an account?</h2>
            <form action="login.php" method="post">
                <a href="register.php">Create an account</a>
            </form>
        </div>
    </body>
</html>