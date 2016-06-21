<?php
	// AutoLoad Carrega todas as Class Automaticas
	function __autoload($class){require_once"{$class}.class.php";}

abstract class ConDB
{
	// Conexao com Banco de Dados
	private static $cnx;
	private function setConn()
	{
		return
		is_null($this->$cnx)?
				$this->$cnx=new PDO('mysql:host=localhost;dbname=painel','root','52439100'):
				$this->$cnx;
	}
	public function getConn()
	{return $this->setConn();}
}
//Valida Login
$lgn=new Login;
var_dump($lgn->setLogin('emersongarrido@hotmail.com.br','a'));