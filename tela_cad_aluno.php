<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="estiloaluno.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Cadastro de Alunos</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="imagens/icon.png" height="20px" width="20px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">Questões por disciplina</a></li>
      <li><a href="cadastro.php">Enviar questão</a></li>
      <li><a href="cadastro.php">Usuários</a></li>
      <li><a href="#">Como funciona</a></li>
	  <li><a href="#">Criadores</a></li>
	  <li><a href="#">Regulamento</a></li>
	   </ul>
  </div>
</nav>  
    <div id=divimage2> <img src="imagens/cad.png"> </div>
    <div id=divform>
        <div id=divcase2>
          
        <form name="form" method="POST" action="conexao.php">
         <p><FONT FACE="Comic Sans MS">
             
         Nome: <input id="textnome" type="text" name="nome" size="40" placeholder="Nome" required="true"/><br/>
         Senha: <input id="textsenha" type="password" name="senha" size="40" placeholder="Senha" required="true"/><br/>
         Email: <input id="textemail" type="text" name="email" size="40" placeholder="email" required="true"/><br/>
            <input id="botaolog1" type="submit" value=" " action="conexao.php"/>
          </FONT></p>
        </form>
        
        </div>
    </div>
  

</body>
</html>