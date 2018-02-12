<?php
class personasModel{
    private $db;
    private $personas;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function getPersonas(){
      $result=$this->db->query("select * from prueba");

        while($row = $result->fetch_assoc()) {
          $this->personas[]=$row;
        }

      return $this->personas;
    }
}
?>
