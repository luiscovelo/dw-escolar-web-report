<?php  
	
	class Cidade extends AppModel {

		public $displayField = "nome";
		public $belongsTo = array("Estado");

	}

?>