<?php

Class Conexion{

	static public function conectar(){

		try{

			$link = new PDO("mysql:host=localhost;dbname=reservas-hotel","root","");
			$link->exec("set names utf8");
			return $link;
		}catch(PDOException $e){
			echo $e->getMessage();
		}


	}

}

?>