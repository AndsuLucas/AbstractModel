<?php


use PDO;
	
abstract class Connection 
{
	public static function  connect(): object
	{
		$config = require "../config.php";
		
		
			$pdo = new PDO(
				"mysql:host=$config[host];charset=$config[charset];dbname=$config[dbname]",$config["user"],$config["password"]
			);
			
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			
			return $pdo;
	}
}
