<?php 
require_once('../app.php');
use Models\Persona;
$person= new Persona();
header("Content-Type: application/json");

$_DATA = json_decode(file_get_contents("php://input"), true);
$person->saveData($_DATA);
