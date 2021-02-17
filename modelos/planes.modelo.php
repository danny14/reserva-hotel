<?php
	require_once "conexion.php";

	Class ModeloPlanes{

		/*======================================
		=            Mostrar Banner            =
		======================================*/
		static public function mdlShowPlanes($table){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();

			$stmt = null;

		}
		
		
		/*=====  End of Mostrar Banner  ======*/
		

		}
?>