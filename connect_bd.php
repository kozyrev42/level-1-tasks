<?php
$host = '127.0.0.1';    
$db_user = 'root';         
$db_password = '';        
$db_name = 'my_php';    
$driver = 'mysql';   
$charset = 'utf8';   
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; 

$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

$pdo = new PDO($dsn, $db_user, $db_password, $options); 
