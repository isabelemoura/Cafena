<?php
extract($_POST,EXTR_OVERWRITE);
if(!isset($item)){$item='';}
$db = new mysqli('127.0.0.1','user','1234','meudb');
if (mysqli_connect_error()) {
	die('Erro de conexão (' . $db->connect_errno . ') '. $db->connect_error);
}
switch($item){
	case 'Sobre':
		include "sobre.php";
	break;
	case 'Produtos':
		include "produtos.php";
	break;
	case 'Contato':
		include "contato.php";
	break;
	case 'divSubMenuProdutos':
		include "subProdutos.php";
	break;
	case 'divSubMenuPedidos':
		include "frmPedido.php";
	break;
	case 'Fornecedores':
		include "fornecedores.php";
	break;
	case 'incluiPedido':
		include "incluiPedido.php";
	break;
	case 'Noticias':
		include "Noticias.php";
	break;
	default:
		include "sobre.php";
	break;
}
?>