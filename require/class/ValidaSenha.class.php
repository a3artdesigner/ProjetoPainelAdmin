<?php
class ValidaSenha
{
	public function  setValidaSenha($senha)
	{
		if(strlen($senha)<1)
			return 'Informe a Senha!';
		if(strlen($senha)<8)
			return 'Deve Conter Acima de 8 Caracteres';			
		else
			return $senha;
	}
}