function fctLogin()
{
	$.post('requeri/jp/jpLogin.php',
		{email:('#eLogin').val(),senha:('#sLogin').val()}
		,function(res){alert(res);});
}