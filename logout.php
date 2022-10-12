<?php 

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
    unset($_SESSION['id']);
    session_destroy();
    header("location: /PHPtraining/prova.php");
}

?>