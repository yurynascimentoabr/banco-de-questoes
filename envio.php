<!DOCTYPE html>
<html>
<title>Bem-vindo</title>
 <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="envio.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i><img src="imagens/icon.png" height="20px" width="20px"></button>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">Questões por disciplina</a></li>
      <li><a href="#">Enviar questão</a></li>
      <li><a href="#">Usuários</a></li>
      <li><a href="funcionamento.php">Como funciona</a></li>
	  <li><a href="criadores.php">Criadores</a></li>
	  <li><a href="regulamento.php">Regulamento</a></li>
	   </ul>
  </div>
</nav>   
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="imagens/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Olá,<?php $nome = $_COOKIE['nome']; echo $nome; ?></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Bem-Vindo</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="questoes.php" class="w3-padding "><i class="fa fa-users fa-fw"></i> Plano de aula</a>
  <a href="regulamento.php" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Configurações</a>
  <a href="index.php" class="w3-padding"><i class="fa fa-bell fa-fw"></i>Sair</a>
  <br><br>
</nav>

      <form name="form" method="POST" action="envios.php">
         <p><FONT FACE="Comic Sans MS">
<select name="disciplina" id="textnome">
         <option>--Selecione--</option>
         <option value="dis_portugues">Portugues</option>
         <option value="dis_matematica">Matemática</option>
         <option value="dis_historia">História</option>
         <option value="dis_geografia">Geografia</option>
         <option value="dis_artes">Artes</option>
         <option value="dis_ingles">Inglês</option>
         <option value="dis_espanhol">Espanhol</option>
         <option value="dis_sociologia">Sociologia</option>
         <option value="dis_fisica">Física</option>
         <option value="dis_ed_fisica">Educação física</option>
         <option value="dis_quimica">Quimíca</option> 
         <option value="dis_biologia">Biológia</option>
</select><br/><br/>
         <textarea id="textsimulado" type="text" name="simulado" size="40" placeholder="Simulado"/></textarea><br/>
         </FONT></p>  
            <input id="botaolog" type="submit" value="" action="envios.php"/>
        </form>
<script>
var mySidenav = document.getElementById("mySidenav");
var overlayBg = document.getElementById("myOverlay");
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>
