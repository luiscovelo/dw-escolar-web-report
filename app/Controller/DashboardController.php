<?php  
	
	class DashboardController extends AppController {

		public $uses = array("Etnia","Genero","Cidade","Estado","Rede","Renda","Matricula");

		public function index(){
			
			
		

		}

		public function etnia(){

			$this->layout = "ajax";

			$generos = $this->Genero->find("list");
			$redes = $this->Rede->find("list");
			$rendas = $this->Renda->find("list");
			$matriculas = $this->Matricula->find("list");
			$cidades = $this->Cidade->find("list");
			$estados = $this->Estado->find("list");

			$this->set("generos", $generos);
			$this->set("redes", $redes);
			$this->set("rendas", $rendas);
			$this->set("matriculas", $matriculas);
			$this->set("cidades", $cidades);
			$this->set("estados", $estados);

			$conditions = "";
			if($this->request->is("POST")){

				foreach ($this->request->data["report"] as $key => $value) {
					
					if(!empty($value)){
						$conditions .= " and aluno.{$key} = {$value} ";
					}

				}

			}

			$dados = $this->Etnia->query(
				"select
					etnia.nome,count(aluno.id) as total
				from alunos aluno
				join cidades cidade on cidade.id = aluno.cidade_id
				join estados estado on estado.id = cidade.estado_id
				join etnias etnia on etnia.id = aluno.etnia_id
				join generos genero on genero.id = aluno.genero_id
				join matriculas matricula on matricula.id = aluno.matricula_id
				join redes rede on rede.id = aluno.rede_id
				join rendas renda on renda.id = aluno.renda_id
				where 1=1
				{$conditions}
				group by aluno.etnia_id"
			);

			$labels = array();
			$values = array();

			foreach ($dados as $key => $value) {
				array_push($labels, $value["etnia"]["nome"]);
				array_push($values, $value[0]["total"]);
			}

			$this->set("dados", $dados);
			$this->set("labels", json_encode($labels));
			$this->set("values", json_encode($values));

		}

		public function rede(){

			$this->layout = "ajax";

			$generos = $this->Genero->find("list");
			$etnias = $this->Etnia->find("list");
			$rendas = $this->Renda->find("list");
			$matriculas = $this->Matricula->find("list");
			$cidades = $this->Cidade->find("list");
			$estados = $this->Estado->find("list");

			$this->set("generos", $generos);
			$this->set("etnias", $etnias);
			$this->set("rendas", $rendas);
			$this->set("matriculas", $matriculas);
			$this->set("cidades", $cidades);
			$this->set("estados", $estados);

			$conditions = "";
			if($this->request->is("POST")){

				foreach ($this->request->data["report"] as $key => $value) {
					
					if(!empty($value)){
						$conditions .= " and aluno.{$key} = {$value} ";
					}

				}

			}

			$dados = $this->Etnia->query(
				"select
					rede.nome,count(aluno.id) as total
				from alunos aluno
				join cidades cidade on cidade.id = aluno.cidade_id
				join estados estado on estado.id = cidade.estado_id
				join etnias etnia on etnia.id = aluno.etnia_id
				join generos genero on genero.id = aluno.genero_id
				join matriculas matricula on matricula.id = aluno.matricula_id
				join redes rede on rede.id = aluno.rede_id
				join rendas renda on renda.id = aluno.renda_id
				where 1=1
				{$conditions}
				group by aluno.rede_id"
			);

			$labels = array();
			$values = array();

			foreach ($dados as $key => $value) {
				array_push($labels, $value["rede"]["nome"]);
				array_push($values, $value[0]["total"]);
			}

			$this->set("dados", $dados);
			$this->set("labels", json_encode($labels));
			$this->set("values", json_encode($values));

		}

	}

?>