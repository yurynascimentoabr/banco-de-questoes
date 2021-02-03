<?php
$email= $_POST['email'];
$senha= $_POST['senha'];


$conexao = mysqli_connect('localhost','root',null,'banco de questoes');
$SQL="select * FROM cadastro_aluno where alu_email ='".$email."' and alu_senha = '".$senha."';";
$resultados= $conexao -> query($SQL);
$linha=$resultados -> fetch_assoc();
    $nome = $linha['alu_nome'];
       if ($nome == "" || $nome == null){
       header("Location: alunos.php");
       exit;
       }else{
       setcookie('nome', $linha['alu_nome']);
       setcookie('disciplina', $linha['alu_disciplina']);
       setcookie('email', $linha['alu_email']);
	   header("Location: perfil.php");
       }
    


?>