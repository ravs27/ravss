<?php
include "dbConnect.php";

    if(isset($_POST['username']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if(empty($username)){
            header("location: login.php?error=Username is required");
            exit();
        } else if(empty($password)){
            header("location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)) {
                header("location: user.php");
            } else {
                header("Location: login.php?error=Incorrect username or password");
                exit();
            }
        }

    } else {
        header("location: login.php");
        exit();
    }
    
?>