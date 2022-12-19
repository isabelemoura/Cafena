function validaLogin(){
	var objUsuario=document.getElementById('usuario');
	var objSenha=document.getElementById('senha');
	var msg ='';
	
	if(objUsuario.value==''){
		msg+="Informe o usuário\n";
	}
	if(objSenha.value==''){
		msg+="Informa senha\n";
	}
	if(msg!=''){
		alert(msg);
		return false;
	}
	else{
		return true;
	}
}

function validarForms(titulo, noticia){
	if(titulo == "" || noticia == ""){
		return true;
	}else{
		return false;
	}
}

function gravarNoticia(){
	var txtTitulo = document.getElementById("txtTitulo")
	var txtNoticia = document.getElementById("txtNoticia")
	var valida = validarForms(txtTitulo.value, txtNoticia.value)
	if(valida == true){
		alert("Preencha todos os campos")
	}else{
		var ajax=new XMLHttpRequest();
		var params="item=incluiNoticia&titulo="+txtTitulo.value+"&noticia="+txtNoticia.value;
		ajax.open("POST","pagina.php",false);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4 && ajax.status==200){
				if(ajax.responseText!='ok'){
					alert(ajax.responseText);
				}
				else{
					alert('Noticia gravada com sucesso'); 
				}
			}
		}
		ajax.send(params);
	}
	
}


function autenticar(){
	var ajax=new XMLHttpRequest();
	var objUsuario=document.getElementById('usuario');
	var objSenha=document.getElementById('senha');
	var params="item=autenticar&usuario="+objUsuario.value+"&senha="+objSenha.value;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
			if(ajax.responseText!='ok'){
				alert(ajax.responseText);
			}
			else{				
				document.location.href='';
				
			}
		}
	}
	ajax.send(params);
}

function sair(){
	var ajax=new XMLHttpRequest();
	var params="item=sair";
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
						
				document.location.href='';
			
		}
	}
	ajax.send(params);
}

function consultarPedidos(){	
	var ajax=new XMLHttpRequest();	
	var objEmail=document.getElementById('email');	
	var objResultado = document.getElementById('resultadoConsulta');
	var params="item=consultarPedidos&email="+objEmail.value;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
			if(ajax.responseText!=''){
				objResultado.innerHTML=ajax.responseText;
			}
		}
	}
	ajax.send(params);
}

function consultarNoticias(){	
	var ajax=new XMLHttpRequest();	
	var titulo=document.getElementById('txtTitulo');	
	var objResultado = document.getElementById('resultadoConsulta');
	var params="item=consultaNoticia&titulo="+titulo.value;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
			if(ajax.responseText!=''){
				objResultado.innerHTML=ajax.responseText;
			}
		}
	}
	ajax.send(params);
}

function excluirPedido(id){	
	if(confirm('Deseja mesmo excluir o pedido id = '+id+' ?')){
		var ajax=new XMLHttpRequest();			
		var params="item=excluirPedido&id="+id;
		ajax.open("POST","pagina.php",true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4 && ajax.status==200){
				if(ajax.responseText!='ok'){
					alert(ajax.responseText);
				}
				else{
					alert('Pedido excluído com sucesso');
					document.getElementById('frmConsultaPedidos').submit();
				}
			}			
		}
		ajax.send(params);
	}
}

function excluirNoticia(id){	
	if(confirm('Deseja mesmo excluir a noticia id = '+id+' ?')){
		var ajax=new XMLHttpRequest();			
		var params="item=excluirNoticia&id="+id;
		ajax.open("POST","pagina.php",true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4 && ajax.status==200){
				if(ajax.responseText!='ok'){
					alert(ajax.responseText);
				}
				else{
					alert('Noticia excluída com sucesso');
					document.getElementById('frmConsultaPedidos').submit();
				}
			}			
		}
		ajax.send(params);
	}
}

function carregarNoticia(id){
	var ajax=new XMLHttpRequest();	
	var objConteudo=document.getElementById('divConteudo');
	var params="item=carregarNoticia&id="+id;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
				objConteudo.innerHTML=ajax.responseText;					
		}
	}
	ajax.send(params);
}

function carregarPedido(id){
	var ajax=new XMLHttpRequest();	
	var objConteudo=document.getElementById('divConteudo');
	var params="item=carregarPedido&id="+id;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
				objConteudo.innerHTML=ajax.responseText;					
		}
	}
	ajax.send(params);
}

function alterarPedido(id){	
	var ajax=new XMLHttpRequest();
	var objEmail=document.getElementById('txtEmail');
	var objPedido=document.getElementById('txtPedido');
	var resp = validarForms(objEmail.value, objPedido.value)

	if(resp == true){
		alert("Preencha todos os campos")
	}else{
		var params="item=alterarPedido&id="+id+"&email="+objEmail.value+"&pedido="+objPedido.value;
		ajax.open("POST","pagina.php",true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4 && ajax.status==200){
				if(ajax.responseText!='ok'){
					alert(ajax.responseText);
				}
				else{
					alert('Pedido Gravado Com Sucesso');
					abre('frmConsultaPedidos','divConteudo');
				}
			}
		}
		ajax.send(params);
	}
}

function alterarNoticia(id){	
	var ajax=new XMLHttpRequest();
	var txtTitulo=document.getElementById('txtTitulo');
	var txtNoticia=document.getElementById('txtNoticia');
	var resp = validarForms(txtTitulo.value, txtNoticia.value)
	
	if(resp == true){
		alert("Preencha todos os campos")
	}else{
		var params="item=alterarNoticia&id="+id+"&titulo="+txtTitulo.value+"&conteudo="+txtNoticia.value;
		ajax.open("POST","pagina.php",true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange=function(){
			if (ajax.readyState==4 && ajax.status==200){
				if(ajax.responseText!='ok'){
					alert(ajax.responseText);
				}
				else{
					alert('Noticia alterada Com Sucesso');
					abre('frmConsultaPedidos','divConteudo');
				}
			}
		}
		ajax.send(params);
	}
}

function abre(item,alvo){	
	var ajax=new XMLHttpRequest();
	var params="item="+item;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4 && ajax.status==200)
		{
			document.getElementById(alvo).innerHTML=ajax.responseText;
		}
	}
	ajax.send(params);

}
