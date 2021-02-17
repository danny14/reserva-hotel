<?php
	require_once "conexion.php";

	Class ModeloBanner{

		/*======================================
		=            Mostrar Banner            =
		======================================*/
		static public function mdlShowBanner($table){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();

			$stmt = null;

		}
		
		
		/*=====  End of Mostrar Banner  ======*/
		

		}
?>