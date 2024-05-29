<?php

$serverName = 'localhost';
$username = 'root';
$password = '';


$conn = mysqli_connect($serverName, $username, $password);


if($conn){
    $query = 'CREATE DATABASE users';
    $res = mysqli_query($conn, $query);
    if($res){
        echo 'Database created successfully';
    }else{
        echo ('database not created successfully');
    }
}