<?php

namespace Models;
class Persona{
    protected static $conn;
    protected static $columsTable = [id_person,firstname_person];
    private $id_pais;
    private $firstname_person;

    public function __construct($args=[]){
        $this->id_persona = $args['id_person'] ?? '';
        $this->nombre_pais = $args['firstname_person'] ?? '';
    }
    public static function setConn($connBd){
        self::$conn = $connBd;
    }
    public function saveData($data){
        $delimiter = ":";
        //$dataBd = $this->sanitizarAttributos();
        $valCols = $delimiter . join(',:',array_keys($data));
        $cols = join(',',array_keys($data));
        $sql = "INSERT INTO pais ($cols) VALUES ($valCols)";
        $stmt= self::$conn->prepare($sql);
        $stmt->execute($data);
    }



}