/*
//Mostrando mensagem por jquery
//uma teg span vazia com id=mensagem
$(function(){
	$('#vermelho').click(function(){
		$('p').css("background-color", "red");
		$('p').fadeOut();
		$('p').delay(1000);
		$('p').fadeIn();
	});

	$('#verde').click(function(){
		$('p').css("background-color", "green");
		$('#mensagem').text("Cor Alterada Com Sucesso");
		$('#mensagem').css('color', "green");
		$('#mensagem').css('border', '1px solid green');
		$('#mensagem').delay(3000);
		$('#mensagem').fadeOut('fast');
	});
});

*/

//Encademanto em bloco
//Uma maneira melhor de se organizar  
$(function(){
	$('#vermelho').click(function(){
		$('p').css("background-color", "red");
		$('p').fadeOut();
		$('p').delay(1000);
		$('p').fadeIn();
	});

	$('#verde').click(function(){
		$('p').css("background-color", "green");
		$('#mensagem')
			.text("Cor Alterada Com Sucesso")
			.css({color: 'green' , border:'1px solid green'})
			.delay(3000)
			.fadeOut('fast')
			.addClass('green')
			.delay(3000)
			.removeClass('green');
	});
});
