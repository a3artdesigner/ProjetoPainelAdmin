<?php
// Validação de Email
class ValidaEmail
{
	public function setValidaEmail($email)
	{
		$ext=array('.com','.br','.net','.bol','.yahoo');


		if(strlen($email)<1)
			return 'Informe o e-mail';
		if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email))
			return 'E-mail Invalido';
		else
			if(!in_array(strrchr($email,'.'),$ext))
			return 'E-mail Incorreto';
		else
			return $email;
	}
}