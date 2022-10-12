<?php 

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $_SESSION['id'] = "Pippo";
    header("location: /PHPtraining/prova.php");
}

?>