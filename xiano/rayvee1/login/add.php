<?php
    include('dbConnect.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (name, surname, username, password) VALUES ('$name','$surname','$username','$password')");
    header('location:login.php');
?>