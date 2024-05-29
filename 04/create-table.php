<?php



$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'users';


$conn = mysqli_connect($serverName, $username, $password, $dbName);








if($conn){
    $query = "CREATE TABLE names (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR (255) NOT NULL,
        lastName VARCHAR (255) NOT NULL
    )"; 
    
    $res = mysqli_query($conn, $query);
    
    if($res){
        echo 'Table created successfully';
    }else{
        echo ('Table not created successfully');
    }
}




