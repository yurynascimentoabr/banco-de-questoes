<!DOCTYPE html>
<html>
<title>Bem-vindo</title>
 <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
<meta charset="UTF-8">
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
      <li><a href="#">Questões por disciplina</a></li>
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
  <a href="#" class="w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Plano de aula</a>
  <a href="regulamento.php" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Configurações</a>
   <a href="cadastro.php" class="w3-padding"><i class="fa fa-bell fa-fw"></i>Sair</a><br><br>
</nav>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <div class="w3-row-padding w3-margin-bottom">
   <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_matematica&nome=matematica"><img src="imagens/mat.png" alt="matematica" style="width:100px"></a>
      <h3>Matemática</h3>
    </div>
    <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_portugues&nome=português"><img src="imagens/por.png" alt="portugues" style="width:160px"></a>
      <h3>Lingua Portuguesa</h3>
    </div>
    <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_ed_fisica&nome=Educação fisica"><img src="imagens/ed.png" alt="educacaofisica" style="width:100px"></a>
      <h3>Educação Fisica</h3>
    </div>
    <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_biologia&nome=Biologia"><img src="imagens/bio.jpg" alt="biologia" style="width:122px"></a>
      <h3>Biologia</h3>
    </div>
     <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_fisica&nome=Física"><img src="imagens/fis.png" alt="fisica" style="width:100px"></a>
      <h3>Fisíca</h3>
    </div>
    <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_quimica&nome=Química"><img src="imagens/qui.png" alt="quimica" style="width:100px"></a>
      <h3>Quimíca</h3>
    </div>
    <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_historia&nome=História"> <img src="imagens/his.jpg" alt="historia" style="width:100px"></a>
      <h3>História</h3>
    </div>
    <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_geografia&nome=Geografia"><img src="imagens/geo.jpg" alt="geografia" style="width:122px"></a>
      <h3>Geografia</h3>
    </div>
     <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_artes&nome=Artes"> <img src="imagens/art.jpg" alt="artes" style="width:125px"></a>
      <h3>Artes</h3>
    </div>
    <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_ingles&nome=Inglês"> <img src="imagens/ing.png" alt="ingles" style="width:100px"></a>
      <h3>Inglês</h3>
    </div>
    <div class="w3-quarter">
      <a href="pdf.php?disciplina=cad_disciplina&materia=dis_espanhol&nome=Espanhol"> <img src="imagens/esp.jpg" alt="espanhol" style="width:100px"></a>
      <h3>Espanhol</h3>
    </div>
    <div class="w3-quarter">
       <a href="pdf.php?disciplina=cad_disciplina&materia=dis_sociologia&nome=Sociologia"><img src="imagens/soc.png" alt="sociologia" style="width:100px"></a>
      <h3>Sociologia</h3>
    
    </div>
  </div>
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
