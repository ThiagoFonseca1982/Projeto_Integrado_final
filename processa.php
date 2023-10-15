<?php

include("conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Login: $login <br>";
//echo "Senha: $senha <br>";



    $result_usuario = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);


    echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";

?>