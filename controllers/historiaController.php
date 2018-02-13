<?php

require './models/historiasModel.php';

$historias = new historiasModel();

if (!isset($_GET["id"])) {
  $id = 1;
}
else {
$id = $_GET["id"];
}


//$datos=$historias->getHistorias();
//$datos=$historias->getHistoriasById(3);
$datos=$historias->getHistoriasById($id);

//Llamada a la vista
require("views/historiaView.phtml");

 ?>
