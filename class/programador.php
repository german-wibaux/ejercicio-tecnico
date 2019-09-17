<?php
class Programador extends Empleado {
	
	var $lenguaje;
    
    public function Programador ($id, $nombre, $apellido, $edad) {
        parent::__construct($id, $nombre, $apellido, $edad);
    }
	
	public function lenguajeValido($lenguaje) {
		$lenguajesValidos = array('php','net','python');
		if (in_array($lenguaje, $lenguajesValidos)) {
            return 'Lenguaje valido';
        } else {
            return 'Lenguaje invalido';
        }
	}
	
	public function setLenguaje ($lenguaje1) {
        $leng = $this->lenguajeValido($lenguaje1);
        if ($leng  == 'Lenguaje valido') {
			$this->lenguaje = $lenguaje1;
		} else {
			echo 'El lenguaje dado no es valido';
		}
	}
	
	public function getEspecializacion() {
		$ret = $this->lenguaje;
		return $ret;
	}
	
}

?>