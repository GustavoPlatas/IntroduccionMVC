<?php
require_once("../Model/ModelPersonas.php");
$personas = new Personas();
$datos_personas = $personas->listar_personas();
//mandamos llamar la vista
require_once("../View/ViewPersonas.php");
?>