<?php
$email=$_POST['email'];
$senha=$_POST['senha'];


$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$SQL="select * FROM cad_professor where pro_email ='".$email."' and pro_senha= '".$senha."' ;";
$resultados= $conexao -> query($SQL);
$linha=$resultados -> fetch_assoc();
$nome = $linha['pro_nome'];
       if ($nome == "" || $nome == null){
       header("Location: professores.php");
       exit;
       }else{
    setcookie('nome', $linha['pro_nome']);
    setcookie('disciplina', $linha['pro_disciplina']);
    setcookie('email', $linha['pro_email']);
	   header("Location: perfil_pro.php");
       }
   


?>