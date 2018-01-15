<?php
    global $con;
    $username = mysqli_real_escape_string ($connection, strtolower($_POST['username']));
    
    $password = mysqli_real_escape_string ($connection, $_POST['password']));

    $query= "SELECT * FROM login WHERE username = '$username'";
?>