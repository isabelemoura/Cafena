<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<script language='javascript' src='biblio.js'></script>
</head>

<body>
	<div id="divTitulo">
		<center><img src='logo.png'></center>
		<center> Cafena </center><span id='spanTitulo'></span>
	</div>
	<div id='divAdmin'><a href='admin/'><img src='adm.png'></a><br> Área administrativa </br></div>
	<div id="divMenu">
		<ul>
			<li><a href="javascript:abreMenu('Sobre');">Sobre</a></li>
			<li><a href="javascript:abreMenu('Produtos');">Produtos</a>
				<ul id='subMenuProdutos'>
					<li><a href="javascript:abreSubMenu('divSubMenuProdutos');">Produtos</a></li>
					<li><a href="javascript:abreSubMenu('divSubMenuPedidos');">Pedidos</a></li>
				</ul>
			</li>
			<li><a href="javascript:abreMenu('Contato');">Contato</a></li>
			<li><a href="javascript:abreMenu('Fornecedores');">Fornecedores</a></li>
			<li><a href="javascript:abreMenu('Noticias');">Noticias</a></li>
		</ul>

	</div>
	<div id="divConteudo"></div>
	<div id="divRodape"><b><span id='telefone'>4358-3748</span><span id='email'>cafena@gmail.com </span></b></div>
	<script language='javascript'>
		abre('Sobre', 'divConteudo');
	</script>

</body>

</html>