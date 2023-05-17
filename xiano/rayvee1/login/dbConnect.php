<?php
$conn = mysqli_connect("localhost","root","","rayvees");

//check connection
if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
?>