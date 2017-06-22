<?php
session_start();

$hora = $_POST['hora'];
$minuto = $_POST['minuto'];
$hora1 = $_POST['hora1'];
$minuto1 = $_POST['minuto1'];
$hora2 = $_POST['hora2'];
$minuto2 = $_POST['minuto2'];


$_SESSION["hora"] = "{$hora}";
$_SESSION["minuto"] = "{$minuto}";
$_SESSION["hora1"] = "{$hora1}";
$_SESSION["minuto1"] = "{$minuto1}";
$_SESSION["hora2"] = "{$hora2}";
$_SESSION["minuto2"] = "{$minuto2}";

header('Location: index.php');

?>