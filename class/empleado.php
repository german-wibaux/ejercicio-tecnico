<?php
abstract class Empleado {

var $id;
var $nombre;
var $apellido;
var $edad;

function Empleado($id, $nombre, $apellido, $edad) {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
}

abstract protected function getEspecializacion();

public function setId($id) {
    $this->id = $id;
}	

public function setNombre($nombre) {
    $this->nombre = $nombre;
}	

public function setApellido($apellido) {
    $this->apellido = $apellido;
}	

public function setEdad($edad) {
    $this->edad = $edad;
}

public function getId() {
    return $this->id;
}

public function getNombre() {
    return $this->nombre;
}

public function getApellido() {
    return $this->apellido;
}

public function getEdad() {
    return $this->edad;
}

}