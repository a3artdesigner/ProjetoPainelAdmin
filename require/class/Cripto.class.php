<?php
class Cripto
{
	public function setCripto($param)
	{
		return $_cripto=hash('whirlpool',$param);
	}
}
