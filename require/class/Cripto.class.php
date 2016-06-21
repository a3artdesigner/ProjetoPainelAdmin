<?php
class Cripto
{
	public function setCripto($param)
	{
		$_cripto=hash('whirlpool',$param);

		return $_cripto;
	}
}
