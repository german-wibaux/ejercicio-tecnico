<?php 

include('empleado.php');
include('programador.php');
include('diseniador.php'); 

$emp1 = new Programador(1, 'german', 'wibaux', 31);
$emp2 = new Diseñador(2, 'gaston', 'gasterii', 23);

$emp1->setLenguaje('php');
$emp2->setTipo('web');

$print = $emp2->getNombre();
$print2 = $emp2->getEspecializacion();

echo $print;

?>