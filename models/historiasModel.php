<?php
class historiasModel{
    private $db;
    private $historias;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->historias=array();
    }
    public function getHistorias(){
      $result=$this->db->query("select * from historias");

        while($row = $result->fetch_assoc()) {
          $this->historias[]=$row;
        }

      return $this->historias;
    }
    public function getHistoriasById($id){
      $result=$this->db->query("select * from historias where id=$id");

        while($row = $result->fetch_assoc()) {
          $this->historias[]=$row;
        }

      return $this->historias;
    }
    public function getHistoriasPaginadas($pagina){
      $result=$this->db->query("select * from historias limit 3 offset $pagina");

        while($row = $result->fetch_assoc()) {
          $this->historias[]=$row;
        }

      return $this->historias;
    }
}
?>
