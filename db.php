<?php
    $server="localhost";
    $db="loginformdb";
    $username="root";
    $password="";

    $conn=mysqli_connect($server,$username,$password,$db);

    if(!$conn)
    {
        die("Connection Failed..!!".mysqli_connect_error());
    }
?>