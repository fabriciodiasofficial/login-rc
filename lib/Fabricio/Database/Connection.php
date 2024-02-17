<?php 
	
	namespace Fabricio\Database;

	abstract class Connection
	{
		private static $conn;

		public static function getConn()
		{
			if(!self::$conn){
				self::$conn = new \PDO('mysql: host=localhost; dbname=criando-login', 'root','');
			}

			return self::$conn;
		}
	}
 ?>