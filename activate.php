<?php

    require 'db.php';

    $vucode=$_GET['code'];
    echo $vucode;
    $aquery="update userdetails SET verified='1' where ucode='$vucode'";

    $adbquery=mysqli_query($conn,$aquery);

    if($adbquery)
    {
        echo "<script>alert('Email Confirmed..!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>