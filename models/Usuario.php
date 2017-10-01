<?php
	
class Usuario// OK
{
	private $id;
	private $cedula;
	private $nombres;
	private $apellidos;
	private $correo;
	private $telefono;
	private $fechaNacimiento;
	private $extension;
	private $contrasena;
	private $estado;
	private $tipo;
	private $centro;

	private function __construct($id,$cedula,$nombres,$apellidos,$correo,$telefono,$fechaNacimiento,$extension,$contrasena,Estado $estado, TipoUsuario $tipo, Centro $centro)
	{
		// asignarlos
		$this->id=$id; //1
		$this->cedula=$cedula; //2
		$this->nombres=$nombres; //3
		$this->apellidos=$apellidos; //4
		$this->correo=$correo; //5
		$this->telefono=$telefono; //6
		$this->fechaNacimiento=$fechaNacimiento; //7
		$this->extension=$extension; //8
		$this->contrasena=$contrasena; //9
		$this->estado=$estado; //10
		$this->tipo=$tipo; //11
		$this->centro=$centro; //12
	}
	// funciones get
	public function getId(){ //1
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getCedula(){ //2
		return $this->cedula;
	}

	public function getNombres(){ //3
		return utf8_encode($this->nombres);
	}
	public function getApellidos(){ //4
		return utf8_encode($this->apellidos);
	}

	public function getCorreo(){ //5
		return $this->correo;
	}

	public function getTelefono(){ //6
		return $this->telefono;
	}

	public function getFechaNacimiento(){ //7
		return $this->fechaNacimiento;
	}

	public function getExtension(){ //8
		return $this->extension;
	}

	public function getContrasena() {
		return $this->contrasena;
	}

	public function getEstado(){ //9
		return $this->estado;
	}

	public function getTipo() {
		return $this->tipo;
	}
	
	public function getCentro(){ //10
		return $this->centro;
	}

	// funciones set
	public function setNombres($nombres){
		$this->nombres=$nombres;
	}

	public function setApellidos($apellidos){
		$this->apellidos=$apellidos;
	}

	public function setTelefono($telefono){
		$this->telefono=$telefono;
	}

	public function setExtension($extension){
		$this->extension=$extension;
	}

	public function setContrasena($contrasena){
		$this->contrasena= Crypto::encrypt($contrasena);
	}

	public function setEstado(Estado $estado){
		$this->estado=$estado;
	}

	public function setCentro(Centro $centro){
		$this->centro=$centro;
	}

	// metodos
	private static function instancia($data){
		$estado=Estado::getOneById($data[9]);
		$tipo=TipoUsuario::getOneById($data[10]);
		$centro=Centro::getOneById($data[11]);
		// instancia
		return new Usuario($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8],$estado,$tipo,$centro);
	}

	private static function getLastInserted() {
		$sql = "select * from usuarios where id_usuario = (select max(id_usuario) from usuarios)";
		try {
			if (!$usuario = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instancia($usuario[0]);
		}	catch (Exception $e) {
			return false;
		}
	}
	
	public static function create($cedula, $nombres, $apellidos, $correo, $telefono, $fechaNacimiento, $extension, $contrasena, TipoUsuario $tipo, Centro $centro) {
		$estado=Estado::getActivo();
		// sql
		$sql="insert into usuarios (cedula_usuario,nombres_usuario, apellidos_usuario,correo_usuario, telefono_usuario, fecha_nacimiento_usuario, extension_usuario, contrasena_usuario, id_estado, id_tipo, id_centro) values (" . $cedula . ", '" . $nombres . "', '" . $apellidos . "','" . $correo . "', '" . $telefono . "', '" . $fechaNacimiento . "', '" . $extension . "', '" . $contrasena . "', " . $estado->getId() . ", " . $tipo->getId() . ", " . $centro->getId() . ")";
		try{
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");		
			}
			return self::getLastInserted();
		}	catch(Exception $e){
			return false;
		}
	}

	public static function getOneById($id) {
		$sql="select * from usuarios where id_usuario = " . $id;
		try{
			if (!$usuario=Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instancia($usuario[0]);
		}
		catch(Exception $e){
			return false;
		}
	}

	public function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

	public function save(){
		$sql="update usuarios set nombre_usuarios= '" . $this->nombres . "', apellidos_usuario = '" . $this->apellidos . "', telefono_usuario = '" . $this->telefono . "', extension_usuario = '" . $this->extension . "', contrasena_usuario = '" . $this->contrasena . "', id_estado = " . $this->estado->getId() . ", id_tipo = " . $this->tipo->getId() . ", id_centro = " . $this->centro->getId() . " where id_usuario = " . $this->id;
		try{
			if (!Bd::exeuteSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}

	public static function iniciarSesion($email, $contrasena) {
		$sql = "select * from usuarios where correo_usuario = '" . $email . "' and contrasena_usuario = '" . $contrasena . "'";
		try {
			if (!$usuario = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instancia($usuario[0]);
		}	catch(Exception $e) {
			return false;
		}
	}

}

?>