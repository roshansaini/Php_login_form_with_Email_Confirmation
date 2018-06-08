<?php
    require 'db.php';
    $email=$_POST['email'];
    $password=$_POST['pswd'];

    $query="select * from userdetails where email='$email' and password='$password'";

    $dbq=mysqli_query($conn,$query);

    if(mysqli_fetch_row($dbq)!=0)
    {
        echo "<script>location.href='welcome.html'</script>";
    }
    else{
        echo "<script>alert('Invalid User')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>