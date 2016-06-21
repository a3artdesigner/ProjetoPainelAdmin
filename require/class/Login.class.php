<?php

class Login
{
	private $vem,$vsh,$cpt,$crud,$email,$senha,$log,$dds;
	public function setLogin($email,$senha)
	{
		$this->vem=new ValidaEmail;
		$this->vsh=new ValidaSenha;
		$this->cpt=new Cripto;
		$this->crud=new CRUD;

		$this->email=$this->vem->setValidaEmail($email);
		$this->senha=$this->vsh->setValidaSenha($senha);

		$this->log=$this->senha==$senha?

			$this->crud->select('*','usuario',' WHERE email=? && senha=?',
								array($this->email,$this->cpt->setCripto($this->senha))):
			FALSE;

		if($this->log && $this->log->rowCount()>0)	
		{
			foreach ($this->log as $this->dds) 
			{
				$_SESSION['logado']=$this->dds;
				header('location:../../admin/');
			}
		}else
			{return 'Acesso Negado!';}

	}
}
