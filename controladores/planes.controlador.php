<?php
Class ControladorPlanes{

	/*======================================
	=            Mostrar Banner            =
	======================================*/
	static public function ctrShowPlanes(){

		$table = "planes";

		$answer = ModeloPlanes::mdlShowPlanes($table);

		return $answer;
	}
	
	
	/*=====  End of Mostrar Banner  ======*/
	
}
?>