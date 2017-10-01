<?php
	
class Usuario// OK
{
	private $id;
	private $cedula;
	private $nombre;
	private $apellido;
	private $correo;
	private $telefono;
	private $fechaNacimiento;
	private $extension;
	private $contrasena;
	private $estado;
	private $tipo;
	private $centro;

	private function __construct($id,$cedula,$nombre,$apellido,$correo,$telefono,$fechaNacimiento,$extension,$contrasena,Estado $estado, TipoUsuario $tipo, Centro $centro)
	{
		// asignarlos
		$this->id=$id; //1
		$this->cedula=$cedula; //2
		$this->nombre=$nombre; //3
		$this->apellido=$apellido; //4
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

	public function getCedula(){ //2
		return $this->cedula;
	}

	public function getNombre(){ //3
		return $this->nombre;
	}
	public function getApellido(){ //4
		return $this->apellido;
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
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function setApellido($apellido){
		$this->apellido=$apellido;
	}

	public function setTelefono($telefono){
		$this->telefono=$telefono;
	}

	public function setExtension($extension){
		$this->extension=$extension;
	}

	public function setContrasena($contrasena){
		$this->contrasena=$contrasena;
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
	
	public static function crear($cedula, $nombre, $apellido, $correo, $telefono, $fechaNacimiento, $extension, $contrasena, TipoUsuario $tipo, Centro $centro) {
		$estado=Estado::obtenerActivo();
		// sql
		$sql="insert into usuarios (cedula_usuarios,nombre_usuarios, apellidos_usuarios,correo_usuarios, telefono_usuarios, fechaNacimiento_usuarios, extension_usuarios, contrasena_usuarios, id_estado, id_tipo, id_centro) values ($cedula, '$nombre', '$apellido','$correo','$telefono', '$fechaNacimiento', '$extension', '$contrasena',$estado->getId(), $tipo->getId(),$centro->getId())";
		try{
			if (!Bd::ejeSql($sql)) {
				// levantar un exception
				throw new Exception("Error Processing Request", 1);
				
			}
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}

	public static function getOneById($id) {
		$sql="select * from usuarios where id_usuarios=$id";
		try{
			if (!$usuario=Bd::retornarDatos($sql)) {
				throw new Exception("Error Processing Request", 1);
			}
			return self::instancia($usuario[0]);
		}
		catch(Exception $e){
			return false;
		}
	}

	// objeto en especifico
	public function actualizar(){
		// sentencia sql
		$sql="update usuarios set nombre_usuarios= $this->nombre,apellidos_usuarios= $this->apellido, telefono_usuarios= $this->telefono, extension_usuarios= $this->extension, contrasena_usuarios = $this->contrasena, id_estado = $this->estado->getId(), id_tipo =$this->tipo->getId(), id_centro = $this->centro->getId() where id_usuarios= $this->id ";

		try{
			if (!Bd::ejeSql($sql)) {
				// levantar un exception
				throw new Exception("Error Processing Request", 1);
				
			}
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}

	public function desactivar(){
		// sentencia sql
		$estado = Estado::obtenerInactivo();
		$sql="update usuarios set id_estado = $estado->getId()";
		try {
			if (!Bd::ejeSql($sql)) {
				throw new Exception("Error Processing Request", 1);
			}
			return true;
		}	catch(Exception $e) {
			return false;
		}
	}

	public function activar() {
		$estado = Estado::obtenerActivo();
		$sql="update usuarios set id_estado = $estado->getId()";
		try {
			if (!Bd::ejeSql($sql)) {
				throw new Exception("Error Processing Request", 1);
			}
			return true;
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function iniciarSesion($email, $contrasena) {
		$sql = "select * from usuarios where correo_usuarios = '$email' and contrasena_usuarios = '$contrasena'";
		try {
			if (!$usuario=Bd::retornarDatos($sql)) {
				throw new Exception("Error Processing Request", 1);
			}
			return self::instancia($usuario[0]);
		}	catch(Exception $e) {
			return false;
		}
	}

}
?>