<?php
if(isset($id)){
$sql = "
		select titulo,conteudo,id from noticias
		where id = $id
	";
	if($result=$db->query($sql)){
		$noticia=$result->fetch_array()
	?>
<div id="carregarNoticia">
	<form name='frmAltPedido' id='frmAltPedido' method='POST' action="javascript:alterarNoticia(<?php echo $noticia[2] ?>);">
		<fieldset>
			<legend>Noticia</legend>
			<input placeholder="Titulo" type='text' name='txtTitulo' id='txtTitulo' size='30'
				value='<?php echo $noticia[0] ?>'><br>
			<br>
			<textarea name='txtNoticia' id='txtNoticia' cols='30' rows='10'><?php echo $noticia[1] ?></textarea>
			<fieldset>
				<input type='submit' name='grv' id='grv' value='enviar'>
			</fieldset>
		</fieldset>
	</form>
</div>

<?php
	}
}
?>