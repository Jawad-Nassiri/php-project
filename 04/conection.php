<?php

$serverName = 'localhost';
$username = 'root';
$password = '';


$conn = mysqli_connect($serverName, $username, $password);

if($conn){
    echo ('You are connected to localhost');
}else{
    echo ('You are not connected to localhost');
}



