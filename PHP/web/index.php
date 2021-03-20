<?php 

/* Olá Mundo
	$mensagem ='hello word!!';
	echo $mensagem;
*/

/* Declaraação de variáveis e operações matemáticas 
	$A = 5;
	$B = 2;

	$SOMA = $A + $B;
	$SUB = $A - $B;
	$DIV = $A / $B;
	$MUL = $A * $B;
	$POT = $A ** $B;

	echo $SOMA;
	print $SUB;
	echo $DIV;
	print $MUL;
	echo $POT;
*/

/* Condicionais 

	if ($A % 2 == 1){
		echo 'Numero Impar A';
	}
	else{
		echo 'Numero Par A';
	}


	if ($B % 2 == 1){
		echo 'Numero Impar B';
	}
	else{
		echo 'Numero Par B';
	}
*/



/*Laços de Repetição*/
#while testa a condição antes de executar o bloco
echo 'while: ';
$i = 0;
while ($i < 10){
	echo $i;
	$i++;
} 

#do...while
#do...while testa a condição depois de executar o bloco
echo '<br>do...while: ';

$i = 0;
do{
	echo $i;
	$i++;
}while($i<10);

#for
echo '<br>for: ';
for ($i = 0; $i < 10; $i++){
	echo $i;
}

#foreach
#usado para varrer Arrays
echo '<br>foreach: ';
$i = [0,1,2,3,4,5,6,7,8,9];
foreach ($i as $j) {
	echo $j;
}

#Arrays
echo '<br>Mostrando Arrays: ';
$varialvel = array(1,2,3,4,5);
print_r ($varialvel);

#foreach
echo '<br>Mostrando Arrays usando foreach: ';
$varialvel;
foreach ($varialvel as $v) {
	echo $v;
}

echo '<br>Mostrando Arrays: ';
$varialvel = array("A"=>"ABACAXI", "B"=> "BOLA", "C"=>"CACHORRO" );
print_r($varialvel);
echo '<br>Mostrando elemento específico do Arrays: ';
echo $varialvel["B"];
$varialvel = array("ABACAXI","BOLA","CACHORRO" );
echo '<br>Mostrando elemento específico do Arrays: ';
echo $varialvel[0];