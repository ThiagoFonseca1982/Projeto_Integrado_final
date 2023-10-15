<?php

include("conexao.php");


$descricao = $_POST['descricao'];
$sql = "DELETE FROM despesas WHERE descricao='$descricao'"; 
mysqli_query($mysqli,$sql) or die("Erro ao tentar excluir registro");

// Verificar se algum registro foi excluído ou não
if (mysqli_affected_rows($mysqli)) {  // se houver linhas afetadas, o dado foi excluído
    echo "Despesa excluída";
}
else {
    mysqli_close($mysqli) or empty($descricao);
    die("Erro ao tentar excluir registro");
}
// Fechar a conexão
mysqli_close($mysqli);
// Redirecionar para página inicial após 5 segundos:
header("refresh:5;url=despesas.php");

?>