<?php
//conexão com o banco de dados
include("conexao.php");  

//iniciando a sessão
session_start();

//ação do botão salvar


?>
<html>
    <head>
        <title>Despesas</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="estilo.css" rel="stylesheet" />
    </head>
    <body>
        <div>
        <nav class="menu">
            <ul>
                <li><a href="index.html">INÍCIO </a></li>
                <li><a href="morador.php">MORADOR</a></li>
                <li><a href="receitas.html">RECEITAS</a></li>
                <li><a href="produtos.html">PRODUTOS</a></li>
                <li><a href="documentos.html">DOCUMENTOS</a></li>
                <li><a href="servicos.html">SERVIÇOS</a></li>
                <li><a href="prestacaocontas.html">PRESTAÇÃO DE CONTAS</a></li>
                <li><a href="login.php">LOGOUT</a></li>
            </ul>
        </nav>
        </div>
        <div class="container">
            <hr>
            <br>
            <h1>TecThi Sistema de Gestão de Condomínio</h1>
            <br>
            <hr>
            <br>
            <br>
        </div>
             <p class="form_name">Cadastro de Despesas</p><br> 
             <form method="POST" action="processadespesa.php" class="form-estilo" id="formulario">
                <label for="descricao_despesa" class="control-label" >Descrição Despesa</label>
                <input type="text" id="descricao" name="descricao" required /><br><br>
                <p id="salvar"><button name="btn-salvar" type="submit" class="">Salvar</button></p>
             </form>
             <div><br><br>
             <p class="form_name">Exclusão de Despesas</p><br> 
             <form method="POST" action="excluirdespesa.php" class="form-estilo" id="formulario"  >
                <label for="descricao_despesa" class="control-label">Digite o nome da Despesa</label>
                <input type="text" id="descricao" name="descricao"><br><br>
                <p id="excluir"><button name="enviar" type="submit" value="Excluir">Excluir</button></p>
            </form>
            </div> 
        </body>
</html>