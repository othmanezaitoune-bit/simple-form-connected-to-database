<?php 

/*  CONNECTION TO DATABASE   */

$dbhost = 'localhost';
$dbname = 'TP_PW_Test';
$dbuser = 'root';
$dbpass = '';

try{
    $PDO = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4", $dbuser,$dbpass);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($PDO){
        echo "connected successfully";
    }
}
catch (PDOException $e ){
    echo "connection failed: " . $e->getMessage();
    exit;
}

?>