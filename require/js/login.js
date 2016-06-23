function fctLogin()
{
	$.post('require/jp/jpLogin.php',{
		email:$('#eLogin').val(),
		senha:$('#sLogin').val()
	},
		function(res)
		{
			if (res) $('span').html(res); 
			else $('span').html('Logado com SUCESS!!');
		});
}
