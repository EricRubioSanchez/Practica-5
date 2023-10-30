<?php 
//Eric Rubio Sanchez
//Ex6
require_once '../Model/BDD.php';

session_start();
$correu = $_SESSION['newsession'];


esborrarUsuari($correu);
header("Location: ../Controlador/logout.php");
exit();

?>