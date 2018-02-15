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
    public function getHistoriasAll(){
      $result=$this->db->query("select * from historias");

        while($row = $result->fetch_assoc()) {
          $this->historias[]=$row;
        }

      return $this->historias;
    }
    public function getHistoriasPaginadas($pagina){
      $offset = $pagina * 3;
      $result=$this->db->query("select * from historias limit 3 offset $offset");

        while($row = $result->fetch_assoc()) {
          $this->historias[]=$row;
        }

      return $this->historias;
    }

    public function getCountHistorias(){
      $contador=0;
      $query = " SELECT * FROM historias";
      $statement = mysqli_query($this->db, $query);
      while($row = $statement->fetch_assoc()) {
        $contador++;
      }
      return $contador;
    }

    public function getHistoriaExploradorHtml($row){

        $line =  "<div class='row'>";
        $line .= "<div class='col-md-7'>";
        $line .= "<a href='#'>";
        $line .=  "<img class='img-fluid rounded mb-3 mb-md-0' src='assets/img/" . $row["foto"] . ".jpg' alt=''>";
        $line .=  "</a>";
        $line .=  "</div>";
        $line .=  "<div class='col-md-5'>";
        $line .=  "<h3>" . $row["nombre"] . "</h3>";
        $line .=  "<p>" .$row["descripcion"] . "</p>";
        $line .=  "<p class='destiny'>Destino: " . $row["destino"] . "</p>";
        $line .=  "<a class='btn btn-primary' href='historia.php?id=" . $row["id"] . "'>Leer mas</a>";
        $line .=  "</div>";
        $line .=  "</div>";
        $line .=  "<hr>";

        return $line;

    }

}
?>
