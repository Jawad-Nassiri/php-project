<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'php_project-youtube';

$conn = mysqli_connect($serverName, $username, $password,$dbName);


if($conn){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res) > 0){
        session_start();
        $_SESSION[`message`] = "You are logged in";

        header('location: /phpCours/05/index.php');
    }else{
        echo "You don't have an account";
    }
}



