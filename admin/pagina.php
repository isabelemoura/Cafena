<?php
session_start();
extract($_POST,EXTR_OVERWRITE);
if(!isset($item)){$item='';}	
if(!isset($_SESSION['usuario']) && $item!='autenticar'){
	echo "<script language='javascript'>document.location.href='';</script>";
}else{
	$db = new mysqli('127.0.0.1','user','1234','meudb');
	if (mysqli_connect_error()) {
		die('Erro de conexão (' . $db->connect_errno . ') '. $db->connect_error);
	}
	switch($item){
		case 'autenticar':
			include "autenticar.php";
		break;	
		case 'sair':
			include "sair.php";
		break;
		case 'frmConsultaPedidos':
			include "frmConsultaPedidos.php";
		break;
		case 'consultarPedidos':
			include "consultarPedidos.php";
		break;
		case 'excluirPedido':
			include "excluirPedido.php";
		break;
		case 'carregarPedido':
			include "carregarPedido.php";
		break;
		case 'alterarPedido':
			include "alterarPedido.php";
		break;
		case 'frmNoticias':
			include "frmNoticias.php";
		break;
		case 'incluiNoticia':
			include "incluiNoticia.php";
		break;
		case 'excluirPedido':
			include "excluirPedido.php";
		break;
		case 'alterarPedido':
			include "alterarPedido.php";
		break;
		case 'frmConsultaNoticias':
			include "frmConsultaNoticias.php";
		break;
		case 'consultaNoticia':
			include "consultaNoticia.php";
		break;
		case 'excluirNoticia':
			include "excluirNoticia.php";
		break;
		case 'carregarNoticia':
			include "carregarNoticia.php";
		break;
		case 'alterarNoticia':
			include "alterarNoticia.php";
		break;
		default:
		break;
	}
}
?>