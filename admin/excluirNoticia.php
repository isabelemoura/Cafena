<?php
if(isset($id)){		
	$sql = "delete from noticias where id=$id";

	if($db->query($sql)){
		echo "ok";
	}
	else{
		echo "Erro na exclusão";
	}
}
?>
