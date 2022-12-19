<?php
if($titulo){	
	$sql = "
		select id,titulo,conteudo from noticias
		where titulo like ('%".$db->real_escape_string($titulo)."%')
	";
	if($result=$db->query($sql)){
        $res=[];
		while($linha=$result->fetch_array()){$res[]=$linha;}
        if(count($res)==0){
            echo "Consulta não retornou resultado!";
        }else{

		foreach($res as $memo){
			echo "<div id='consultaPedido'>
                    <p>ID noticia:{$memo[0]}<br></p>
					<hr>
					<p>Titulo:{$memo[1]}<br></p>
					<hr>
					<p>Conteudo:{$memo[2]}</p>
					<div id='funcoes'>
                        <a href='javascript:excluirNoticia($memo[0])'>Excluir</a> - 
                        <a href='javascript:carregarNoticia($memo[0])'>Alterar</a>
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