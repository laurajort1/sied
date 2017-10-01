<?php

class Regional {

	// Atributos
	private $id;
	private $nombre;

	private function __construct($id, $nombre) {
		$this->id = $id;
		$this->nombre = $nombre;
	}

	// Getters
	public function getId() {
		return $this->id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	// Metodos
	

}

?>