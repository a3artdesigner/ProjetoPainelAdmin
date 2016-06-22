<?php
function __autoload($class){require_once"{$class}.class.php";}

abstract class ConDB
{
	private $cnx;
	private function setConn()
	{
		return
			is_null($this->cnx)?
				$this->cnx=new PDO('mysql:host=mysql.hostinger.com.br;dbname=u529641438_dados','u529641438_user','52439100'):
				$this->cnx;
	}
	public function getConn()
	{return $this->setConn();}
}
