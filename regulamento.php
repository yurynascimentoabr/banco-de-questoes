<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="estiloaluno.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Bem-vindo Professores</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="imagens/icon.png" height="20px" width="20px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="questoes.php">Questões por disciplina</a></li>
      <li><a href="funcionamento.php">Como funciona</a></li>
	  <li><a href="criadores.php">Criadores</a></li>
	  <li><a href="regulamento.php">Configurações</a></li>
	   </ul>
  </div>
  </nav>
  <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="imagens/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Olá, <?php $nome = $_COOKIE['nome']; echo $nome; ?></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Bem-Vindo</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="questoes.php" class="w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Plano de aula</a>
  <a href="regulamento.php" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Configurações</a>
  <a href="index.php" class="w3-padding"><i class="fa fa-bell fa-fw"></i>Sair</a><br><br>
</nav>
   <?php 
 echo '<center>';
 echo '<table border="1">';
   echo  '<tr><td>Nome</td><td>'.$_COOKIE['nome'].'</td></tr>';
   echo '<tr><td>Disciplina</td><td>'.@$_COOKIE['disciplina'].'</td></tr>'; 
   echo '<tr><td>Email</td><td>'.$_COOKIE['email'].'</td></tr>';
echo '</table>';
 echo '</center>';
   ?>
</body>
</html>