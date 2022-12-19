<?php
if(isset($titulo) && isset($noticia)){	

	$sql = "insert into noticias (
			titulo,
			conteudo
		)
		values(
			'".$db->real_escape_string($titulo)."',
			'".$db->real_escape_string($noticia)."'
		)		"; 
	if($db->query($sql)){
		echo "ok";
	}
	else{
		echo "erro ao incluir o pedido";
	}
}else{
    echo "Pera lá meu nobre";
}
?>