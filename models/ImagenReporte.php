<?php

class ImagenReporte {// OK

	private $id;
	private $extension;
	private $reporte;

	private function __construct($id, $extension, Reporte $reporte) {
		$this->id = $id;
		$this->extension = $extension;
		$this->reporte = $reporte;
	}

	// Getters
	public function getId() {
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getExtension() {
		return $this->extension;
	}

	public function getReporte() {
		return $this->reporte;
	}

	// Metodos
	public static function instance($data) {
		$reporte = Reporte::getOneById($data[2]);
		return new ImagenReporte($data[0], $data[1], $reporte);
	}

	private static function getLastInserted() {
		$sql = "select * from imagenes_reportes where id_imagen_reporte = (select max(id_imagen_reporte) from imagenes_reportes)";
		try {
			if (!$imagen = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($imagen[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($extension, Reporte $reporte) {
		$sql = "insert into imagenes_reportes (extension_imagen_reporte, id_reporte) values ('" . $extension . "', " . $reporte->getId() . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getAllByReporte(Reporte $reporte) {
		$sql = "select * from imagenes_reportes where id_reporte = " . $reporte->getId();
		try {
			if (!$imagenes = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$imagenesArray = array();
			foreach ($imagenes as $imagen) {
				$imagenesArray[] = self::instance($imagen);
			}
			return $imagenesArray;
		}	catch (Exception $e) {
			return false;
		}
	}

}

?>