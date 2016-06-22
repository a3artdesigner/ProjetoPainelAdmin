<?php

class ValidaSenha
{
	public function  setValidaSenha($senha)
	{
		if(strlen($senha)<1)
			return 'Informe a Senha!';
		else
			return $senha;
	}
}