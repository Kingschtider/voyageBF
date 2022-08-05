<?php
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'dbvoyage');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_PORT', 3306);

class ConnexionDataBase
{
	private static $db;

	public static function getDBO()
	{
		try {
			self::$db = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
			self::$db->exec("SET CHARACTER SET utf8");
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
		return self::$db;
	}
}
?>