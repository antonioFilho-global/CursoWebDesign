<?php 

/* Deixando a página do projeto versão 02
	dinâmica 
*/

/*Define a págin atual pela url */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carregando o header.php */
include 'app/views/header.php';

/*Carregar a página de acordo com a escolha do usuário*/
switch ($pagina) {
	/* Carregando o home.php */
	case 'home':
		include 'app/views/home.php';
		include 'app/views/sobre.php';
		break;
	
	/* Carregando o sobre.php */
	case 'sobre':
		include 'app/views/sobre.php';
		break;

	/* Carregando o navegar.php */
	case 'navegar':
		include 'app/views/navegar.php';
		break;


	default:
		include 'app/views/home.php';
		break;
}

/* Carregar o footer.php */
include 'app/views/footer.php';