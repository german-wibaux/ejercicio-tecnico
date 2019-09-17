<?php



class Empresa {

    var $id;
	var $nombre;
	var $empleados ;
	
	public function Empresa($id, $nombre) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->empleados = array();
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	
	public function agregarEmpleado($empleado) {
		array_push($this->empleados, $empleado);
		
	}
	
    public function getId() {
		return $this->id;
	}
	
	public function getNombre() {
		return $this->nombre;
	}
	
	public function getEmpleados() {
		return $this->empleados;
	}
	
	public function getEmpleado($id) {
		for($i=0;$i < $this->empleados.sizeof() ;$i++) {
			if ($this->empleados.get($i).getId() == $id) {
				$empleadoRet = $this->empleados.get($i);
			}
		}
		return $empleadoRet;
	}
	 
	public function getPromedioEdad () {
		$prom = 0;
		for($i=0;$i < $this->empleados.sizeof() ;$i++) {
			$prom = $prom + $this->empleados.get($i).getEdad();
		}
		return $prom / $this->empleados.sizeof();
	}

}