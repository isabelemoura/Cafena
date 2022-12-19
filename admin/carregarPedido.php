<?php
if(isset($id)){
$sql = "
		select email,pedido,id from pedidos
		where id = $id
	";
	if($result=$db->query($sql)){
		$pedido=$result->fetch_array()
	?>
	<div id="carregarNoticia">
		<form name='frmAltPedido' id='frmAltPedido'  method='POST' action="javascript:alterarPedido(<?php echo $pedido[2] ?>);" >
			<fieldset>
				<legend>Pedidos</legend>
				<input type='text' name='txtEmail' id='txtEmail' size='30' value='<?php echo $pedido[0] ?>'><br>
				<br>
				<textarea name='txtPedido' id='txtPedido' cols='40' rows='15' ><?php echo $pedido[1] ?></textarea>
				<fieldset>
					<input type='submit' name='grv' id='grv' value='enviar'>
					<input type='reset' name='lmp' id='lmp' value='limpar'>
				</fieldset>
			</fieldset>
		</form>
	</div>

	<?php
	}
}
?>