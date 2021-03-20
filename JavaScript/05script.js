function valida(){
	var usuario = document.getElementById('usuario');
	var senha = document.getElementById('senha');

	
	if((usuario.value == "") || (senha.value == "")){
		alert("Verifique campos em branco");
	}
	else{
		alert("O formulário Pode Ser Enviado Com Sucesso");
	}
}

