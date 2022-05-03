<?php

namespace App;

class Connection {

	public static function getDb() {
		try {
			$conn = new \PDO(
				"mysql:host=localhost;
				 dbname=softwork;
				 charset=utf8",
				 "root",
				"" 
			);
			return $conn;
		} catch (\PDOException $e) {
			echo 'Erro ao conectar com o Mysql: ' . $e->getMessage();
		}
	}
}
?>