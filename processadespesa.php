<?php

include("conexao.php");


$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);


$result_despesa = "INSERT INTO despesas (descricao) VALUES ('$descricao')";
$resultado_despesa = mysqli_query($mysqli, $result_despesa);

echo"<script language='javascript' type='text/javascript'>
          alert('Despesa cadastrada com sucesso!');window.location.
          href='despesas.php'</script>";



?>