<?php

require './models/historiasModel.php';

$historias = new historiasModel();

if (!isset($_GET["pagina"])) {
  $pagina = 0;
}
else {
$pagina = $_GET["pagina"];
}

//$datos=$historias->getHistorias();
//$datos=$historias->getHistoriasById(3);
$datos=$historias->getHistoriasPaginadas($pagina);
$countHistoriasPag = $historias->getCountHistorias()/3;

//Llamada a la vista
require("views/exploradorView.phtml");

 ?>
