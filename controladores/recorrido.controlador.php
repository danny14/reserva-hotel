<?php
Class ControladorRecorrido{

	/*======================================
	=            Mostrar Banner            =
	======================================*/
	static public function ctrShowRecorrido(){

		$table = "recorrido";

		$answer = ModeloRecorrido::mdlShowRecorrido($table);

		return $answer;
	}
	
	
	/*=====  End of Mostrar Banner  ======*/
	
}
?>