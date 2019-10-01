<?php
//$servername = "localhost";
//$username = "root";
//$password = "vagrant";
//$database = 'Sellerregistration';

// Create connection
//$conn = new mysqli($srvername, $username, $password, $database);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=Sellerregistration;charset=utf8','root','vagrant',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}