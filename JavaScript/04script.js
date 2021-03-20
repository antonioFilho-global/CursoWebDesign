//Função mudaCor altera a cor e tamanho do texto de id mensagem 
function mudaCor(cor){
	var elemento = document.getElementById("mensagem");
	elemento.style.color = cor;
	//elemento.style.backgroundColor = cor;
	elemento.style.fontSize = "50px";
}