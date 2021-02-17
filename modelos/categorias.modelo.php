<?php
	require_once "conexion.php";

	Class ModeloCategorias{

		/*======================================
		=            Mostrar Banner            =
		======================================*/
		static public function mdlShowCategorias($table){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();

			$stmt = null;

		}
		
		
		/*=====  End of Mostrar Banner  ======*/
		

		}
?>