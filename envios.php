<?php
$disciplina = $_POST['disciplina'];
$simulado = $_POST['simulado'];
echo $disciplina;
echo $simulado;
$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$Query="INSERT INTO cad_disciplina(".$disciplina.") values ('".$simulado."');";
$executa=mysqli_Query($conexao,$Query);
mysqli_close($conexao);

		header("Location: envio.php");

?>