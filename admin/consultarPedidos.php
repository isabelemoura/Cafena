<?php
if($email){	
	$sql = "
		select email,pedido,id from pedidos
		where email like ('%".$db->real_escape_string($email)."%')
	";
	if($result=$db->query($sql)){
        $res=[];
		while($linha=$result->fetch_array()){$res[]=$linha;}
        if(count($res)==0){
            echo "Consulta não retornou resultado!";
        }else{

		foreach($res as $memo){
			echo "<div id='consultaPedido'>
                    <p>Numero Pedido:{$memo[2]}<br></p>
					<hr>
					<p>Pedido:{$memo[1]}<br></p>
					<hr>
					<p>Email:{$memo[0]}</p>
					<div id='funcoes'>
                        <a href='javascript:excluirPedido($memo[2])'>Excluir</a> - 
                        <a href='javascript:carregarPedido($memo[2])'>Alterar</a>
                    </div>
					";
            echo "</div>";

        }
	}
	}
	else{
		echo "Erro na consulta";
	}
}
?>