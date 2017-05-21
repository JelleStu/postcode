<?php
	class database {
		public static function connect() {
			$connection = new PDO('mysql:host=localhost:3306;dbname=postcode;charset=utf8', 'root', '');
			return $connection;
		}
	}
?>
