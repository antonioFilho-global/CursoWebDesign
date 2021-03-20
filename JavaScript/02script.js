
// while 
var i =0;

while(i<3){
	alert("Usando While");
	alert(i++);
}



//for
for (var j =0; j<3; j++){
	alert("Usando For");
	alert(j);
}



//Tipos de dados em js
var inteiro = 5;
var decimal = 5.5;
var texto = "Olá mundo";
var lista = ["laranja","maça", "banana", 1234];
alert (lista[0]);

for (i in lista ){
	alert (lista[i]);
	console.log(lista[i]);
}


//Funções em js
//o retorno por console.log fica de uma 
//maneira que o usuário nao consegue ver diretamente  
function soma(a,b){
	console.log(a+b);
}

soma(5,5);

function sub(a,b){
	console.log(a-b);
	return a-b;
}

var s = sub(5,5);
//console.log(s);

function mul(a,b){
	return a*b;
}

console.log(mul(5,5));