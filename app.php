<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Models\Persona;
    $db = new Database();
    $conn = $db->getConnection('mysql');
    Persona::setConn($conn);
?>