<?php 
 $severName = "localhost";
 $username = "root";
 $password = "";
 $dbName = "php_project-youtube";
 

 $conn = mysqli_connect($severName, $username, $password, $dbName);



 if($conn){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (
        `name`, `username`, `email`, `password`, `isAdmin`)
         VALUES ('$name', '$username', '$email ', '$password', '0')";

    $res = mysqli_query($conn, $query);

    if($res){
        header('location: /phpCours/05/index.php');
    }

}
