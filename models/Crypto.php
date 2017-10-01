<?php
require_once("../config.php");
/***
 * Clase de servicios de encriptacion
 */
class Crypto {

	private static $key = KEY;

	private function __construct() {
		// Empty code...
	}

	// Static methods
	public static function encrypt($data) {
		return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(self::$key), $data, MCRYPT_MODE_CBC, md5(md5(self::$key))));
	}

	public static function uncrypt($hash) {
		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(self::$key), base64_decode($hash), MCRYPT_MODE_CBC, md5(md5(self::$key))), "\0");
	}
}

?>