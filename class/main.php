<?php 

include('empleado.php');
include('programador.php');
include('diseniador.php');
include('empresa.php'); 

$empresa = new Empresa(1, "Primera");
// $emp1->setLenguaje('php');
// $emp2->setTipo('web');

// $print = $emp2->getNombre();
// $print2 = $emp2->getEspecializacion();

if( isset($_POST["tipo"]) )
{
    $emp = new Diseñador(2, 'gaston', 'gasterii', 23);
    $empresa->agregarEmpleado($emp);
    header('Location: ../index.php');
}

if( isset($_POST["lenguaje"]) )
{
    $emp = new Programador(1, 'german', 'wibaux', 31);
    $empresa->agregarEmpleado($emp);
}


?>