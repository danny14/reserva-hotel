<?php
Class ControladorCategorias{

	/*======================================
	=            Mostrar Banner            =
	======================================*/
	static public function ctrShowCategorias(){

		$table = "categorias";

		$answer = ModeloCategorias::mdlShowCategorias($table);

		return $answer;
	}
	
	
	/*=====  End of Mostrar Banner  ======*/
	
}
?>