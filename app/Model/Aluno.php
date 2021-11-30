<?php  
	
	class Aluno extends AppModel {
		
		public $displayField = "cpf";
		public $belongsTo = array("Cidade","Etnia","Rede","Renda","Matricula","Genero");

	}

?>