<?php
Class ControladorBanner{

	/*======================================
	=            Mostrar Banner            =
	======================================*/
	static public function ctrShowBanner(){

		$table = "banner";

		$answer = ModeloBanner::mdlShowBanner($table);

		return $answer;
	}
	
	
	/*=====  End of Mostrar Banner  ======*/
	
}
?>