<?php
  $pdf = $_GET['disciplina'];
  $materia = $_GET['materia'];
  $nome = $_GET['nome'];
  $connect = mysqli_connect('localhost', 'root', null, 'banco de questoes');
  $query = "Select * from ".$pdf.";";
  $select = $connect -> query($query);
  include('mpdf60/mpdf.php');
  $mpdf=new mPDF();
  $mpdf->SetTitle($nome);
  $mpdf->WriteHTML($nome);
  if ($pdf == "" || $pdf == null) {
    header("Location:questoes.php");
  }else{
  while (@$resultado = $select -> fetch_assoc()) {
    $mpdf->WriteHTML(
            '<center>'.$resultado[''.$materia.''].'</center>'
            );}
            $mpdf->WriteHTML('</table>');
  }
  $mpdf->Output();
  exit();
?>