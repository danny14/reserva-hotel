<?php
	require_once "conexion.php";

	Class ModeloRecorrido{

		/*======================================
		=            Mostrar Banner            =
		======================================*/
		static public function mdlShowRecorrido($table){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();

			$stmt = null;

		}
		
		
		/*=====  End of Mostrar Banner  ======*/
		

		}
?>