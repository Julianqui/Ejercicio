<?php

	class AastoreMysql
	{
		private $database;
		private $connection;

		public function __construct($dbName)
		{
			$this->database = $dbName;

			$host = "mysql:host=localhost; dbname={$this->database}; charset=utf8mb4; port=8889";
			$user = 'root';
			$pass = 'root';

			try{
				$this->connection = new PDO(
					$host,
					$user,
					$pass,
					[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			}catch( PDOException $Exception ) {
		   	echo $Exception->getMessage();
			}
		}

		public function getUsuarios()
		{
			$stmt = $this->connection->prepare("SELECT id, nombre, nombreusuario, FROM usuarios ORDER BY nombre");
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function totalRows($queryResult)
		{
			if ( gettype($queryResult) == 'array' ) {
				return count($queryResult);
			} else {
				return 1;
			}
		}
	}
