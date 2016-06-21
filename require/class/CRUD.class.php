<?php
class CRUD extends ConDB
{
	// Query com $prep = " Prapara " / $exec = " Executa " Função !
	private $query;
	private function prepExec($prep,$exec)
	{
		$this->query=$this->getConn()->prepare($prep);
		$this->query->execute($exec);
	}
	// Inserir No Banco de Dados
	public function insert($table,$prep,$exec)
	{
		$this->prepExec('INSERT INTO '.$table.' SET '.$prep.'',$exec);
		return $this->getConn()->lastInsertId();
	}
	// Selecionar No Banco de Dados
	public function select($fields,$table,$prep,$exec)
	{
		$this->prepExec('SELECT '.$fields.'  '.$table.' '.$prep.'',$exec);
		return $this->query;
	}

	// Upload No Banco de Dados
	public function update($table,$prep,$exec)
	{
		$this->prepExec('UPDATE '.$table.' SET '.$prep.'',$exec);
		return $this->query;
	}

	// Deletar No Banco de Dados
	public function delete($table,$prep,$exec)
	{
		$this->prepExec('DELETE FROM '.$table.' '.$prep.'',$exec);
		return $this->query;
	}

} 
