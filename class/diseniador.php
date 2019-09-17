<?php 
class Diseñador extends Empleado {
	
	var $tipo;
	
	public function Programador ($id, $nombre, $apellido, $edad) {
        parent::__construct($id, $nombre, $apellido, $edad);
    }
	
	public function tipoValido($tipo) {
		$tiposValidos = array('web','grafico');
		if (in_array($tipo, $tiposValidos)) {
            return 'Tipo valido';
        } else {
            return 'Tipo invalido';
        }
	}
	
	public function setTipo ($tipo) {
		if ($this->tipoValido($tipo)  == 'Tipo valido') {
			$this->tipo = $tipo;
		} else {
			echo 'El tipo dado no es valido';
		}
	}
	
	public function getEspecializacion() {
		$ret = $this->tipo;
		return $ret;
	}
	
}

?>