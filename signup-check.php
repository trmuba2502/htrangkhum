<?php
    session_start();
    include "connectdb.php";

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['repassword'])) {
        
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        $name = validate($_POST['name']);
        $repassword = validate($_POST['repassword']);

        $userdata = 'username='. $username. '&name='. $name;

        echo $userdata;

        if (empty($username)){
            header("Location: register.php?error=Username is required&$userdata");
            exit();
        }
        else if (empty($password)) {
            header("Location: register.php?error=Password is required&$userdata");
            exit();
        } 
        else if (empty($name)) {
            header("Location: register.php?error=Name is required&$userdata");
            exit();
        } 
        else if (empty($repassword)) {
            header("Location: register.php?error=Password confirmation is required&$userdata");
            exit();
        } 
        else if ($password !== $repassword) {
            header("Location: register.php?error=Password confirmation does not match&$userdata");
            exit();
        }
        else {
            // hash password
            $password = md5($password);

            $sql = "SELECT * FROM users WHERE username='$username'";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                header("Location: register.php?error=The username has been taken&$userdata");
                exit();
            } 
            else {
                $sql2 = "INSERT INTO users(username,password,name) VALUES('$username', '$password', '$name')";
                $result2 = mysqli_query($conn, $sql2);

                if ($result2){
                    header("Location: register.php?success=Your account has been created successfully");
                    exit(); 
                }
                else {
                    header("Location: register.php?error=unknown error occured&$userdata");
                    exit();
                }
            }
        }
    } 
    else {
        header("location: register.php");
        exit();
    }

?>