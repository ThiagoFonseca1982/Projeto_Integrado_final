<?php

include("conexao.php");


$nome = $_POST['nome'];
$sql = "DELETE FROM morador WHERE nome='$nome'"; 
mysqli_query($mysqli,$sql) or die("Erro ao tentar excluir registro");

// Verificar se algum registro foi excluído ou não
if (mysqli_affected_rows($mysqli)) {  // se houver linhas afetadas, o dado foi excluído
    echo "Morador Excluído com sucesso! ";
}
else {
    mysqli_close($mysqli);
    die("Erro ao tentar excluir registro");
}
// Fechar a conexão
mysqli_close($mysqli);
// Redirecionar para página inicial após 5 segundos:
header("refresh:5;url=morador.php");

?>