<?php 

	class Conexion{
	
		private $conect;

		public function __construct(){

			$connectionString = "".DB_ENGINE.":host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";";
			//.DB_CHARSET.  -> solo funciona con mysql
			try {
				$this->conect = new PDO($connectionString, DB_USER , DB_PASSWORD );
				$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				$this->conect ='Error de conexión';
				echo "ERROR: ". $e->getMessage();
			}
		}

		public function connect()
		{
			return $this->conect;
		}
		
	}

	/*
	$obj=new Conexion();
	$obj->connect();
    */
