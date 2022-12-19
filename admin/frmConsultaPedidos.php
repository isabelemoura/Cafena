<div id="consulta">
<form name='frmConsultaPedidos' id='frmConsultaPedidos' method='POST' action="javascript:consultarPedidos();" >
	<fieldset><legend>Consulta Pedidos</legend>
		<input placeholder="E-mail" type='text' name='email' id='email' size='20'><br>
	</fieldset>
	<fieldset>
		<input class="btn" type='submit' name='con' value='consultar'>
		<input class="btn" type='reset' name='lmp' value='limpar'>
	</fieldset>
</form>
<div id='resultadoConsulta'></div>
</div>
