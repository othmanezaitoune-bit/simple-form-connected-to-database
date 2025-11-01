<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $class= $_POST['class'];

    require_once 'formphp.php';

    try {


        $query ="INSERT INTO guild_form (firstname, lastname, class) 
        VALUES (?, ?, ?);";//? to prevent sql injection

        $stmt = $PDO->prepare($query);
        $stmt->execute([$firstname, $lastname, $class]);

        $PDO = null; // close connection
        $stmt = null; // close statement 

        die("You have successfully registered!");//Exit for script with no connection running, die for anything that has a connectino running in it
        

        
    } catch(PDOException $e){
            
            die("Query failed:" . $e->getMessage());
        
        }

}else {
        header("Location: formphp.php");
        exit;
    }   

?>