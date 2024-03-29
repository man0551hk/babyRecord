<?php
class Cookie {
	public static function set($key, $val) {
		ob_start();
		include 'config/config.php';
		setcookie($key, $val, time() + (86400 * 30), "/", $domain);
		ob_end_flush();
	}
	
	public static function get($key){
		if(isset($_COOKIE["$key"]) && !empty($_COOKIE["$key"])) {
			return $_COOKIE["$key"];
		} else {
			return "";
		}
	}
	
	public static function getValue($key, $paramName){
		if(isset($_COOKIE["$key"]) && !empty($_COOKIE["$key"])) {
			parse_str($_COOKIE["$key"], $output);
			return $output[$paramName];
		} else {
			return "";
		}
	}

	public static function RandomValue() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 16; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}

	public static function SetUserCookie($userId, $name, $key) {
		Cookie::set("userId", $userId);
		Cookie::set("name", $name);
		Cookie::set("key", $key);
	}
}

?>