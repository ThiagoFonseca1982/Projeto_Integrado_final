<?php

include("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$datanascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);


$result_morador = "INSERT INTO morador(nome, cpf, datanascimento, endereco, cidade, uf, celular, email) VALUES ('$nome','$cpf','$datanascimento','$endereco','$cidade','$uf','$celular','$email')";
$resultado_morador = mysqli_query($mysqli, $result_morador);

echo"<script language='javascript' type='text/javascript'>
          alert('Morador cadastrado com sucesso!');window.location.
          href='morador.php'</script>";

?>