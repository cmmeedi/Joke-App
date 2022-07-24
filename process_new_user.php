<?php

    include "db-connect.php";


    $new_email = $_GET['emailLogin'];
    $new_username = $_GET['username'];
    $new_password = $_GET['password'];
    $new_password = $_GET['confirmPassword'];

    echo "<h2>Email: </h2>" . $new_email . "<br>";
    echo "<h2>Username: </h2>" . $new_username . "<br>";
    echo "<h2>Password: </h2>" . $new_password . "<br>";


?>