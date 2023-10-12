<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Register nè Trang đáng ghéc</title>
        <link rel="stylesheet" href="styles3.css">
    </head>
    <body>
        <div id="signup-div">
            <form id="signup-form" action="signup-check.php" method="post">
                <h2>Register</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                
                <label>Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input name="name" type="text" placeholder="Enter name" value="<?php echo $_GET['name']; ?>"><br>
                <?php } else{ ?>
                    <input name="name" type="text" placeholder="Enter name"><br>
                <?php  }?>
                
                <label>Username</label>
                <?php if (isset($_GET['username'])) { ?>
                    <input name="username" type="text" placeholder="Enter username" value="<?php echo $_GET['username']; ?>"><br>
                <?php } else{ ?>
                    <input name="username" type="text" placeholder="Enter username"><br>
                <?php  }?>

                <label>Password</label>
                <input name="password" type="password" placeholder="Enter password">
                <br>

                <label>Confirm your password</label>
                <input name="repassword" type="password" placeholder="Confirm your password">
                <br>
                <button type="submit">Create</button>
                <br>
                <a href="index.php" class="ca">Already have an account ?</a>
            </form>
        </div>
    </body>
</html>