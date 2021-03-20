// $(seletor).ação();

//button é o seletor
//click é a ação  
//hide esconde o seletor h1

/* (Forma com sintaxe maior)
$(document).ready(function(){
	$('button').click(function(){
		$('h1').hide();	
	});
});
*/

//Escrevendo de uma maneira mais simples (Forma reduzida)
//Pode ser chamado o elemento por meio de '#id'

//faz o conteúdo do especificado pelo id desaparecer 
$(function(){
	$('#botao01').click(function(){
		$('#aprendendo').hide();	
		$('#aprendendo').fadeIn(5000); 
	});
});


//Mudando o CSS
$(function(){
	$('#botao01').click(function(){
		$('#mudando').css("color","red");
	});
});

//Mensagem vermelha verde
//Pode ser usado "background-color", "red"
$(function(){
	$('#vermelho').click(function(){
		$('p').css("color","red",);
	});

	$('#verde').click(function(){
		$('p').css("color","green");
	});
});

//Efeito fade, desaparecer lentamente 
$(function(){
	$('#fadeVermelho').click(function(){
		$('#fade01').css("color","red",);
		$('#fade01').fadeOut('slow'); //usando ('slow')
		$('#fade01').delay(1000); //define o tempo de transição 
		$('#fade01').fadeIn('slow');  //É o oposto do fadeOut
		//gravando Mensagem
		$('#fade01').text("Cor Alterada Com Sucesso");
		$('fade01').css('color','red');
		$('fade01').css('border', '1px solid red'); 
	});

	$('#fadeVerde').click(function(){
		$('#fade02').css("color","green",);
		$('#fade02').fadeOut(3000); //pode ser usado ('fast')
		$('#fade02').delay(1000); //define o tempo de transição 
		$('#fade02').fadeIn(5000);  //É o oposto do fadeOut  
									 //pode ser usado valores numéricos
		//gravando mensagem 
		$('#fade02').text("Cor Alterada Com Sucesso");
		$('fade02').css('color','red');
		$('fade02').css('border', '1px solid green');
		$('#fade02').delay(3000);
		$('#fade02').fadeOut(3000);
	});
});