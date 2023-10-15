<?php
//conexão com o banco de dados
include("conexao.php");  

//iniciando a sessão
session_start();

//ação do botão salvar


?>
<html>
    <head>
        <title>Morador</title>
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
                <li><a href="despesas.php">DESPESAS</a></li>
                <li><a href="produtos.html">PRODUTOS</a></li>
                <li><a href="documentos.html">DOCUMENTOS</a></li>
                <li><a href="servicos.html">SERVIÇOS</a></li>
                <li><a href="prestacaocontas">PRESTAÇÃO DE CONTAS</a></li>
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
            <p class="form_name">Cadastro de Morador</p><br>
            <form method="POST" action="processamorador.php" class="form-estilo" id="formulario">
              <div>
                <label for="nome" class="control-label">Nome
                </label><input type="text" id="nome" name="nome" required />
              </div>
              <br>
              <div>
                <p><label for="cpf" class="control-label">CPF</label>
                <input type="text" id="cpf" name="cpf" /></p>
              </div>
              <br>
              <div>
                <label for="nascimento" class="control-label">Data de Nascimento</label>
                <input type="date" name="datanascimento" required />
              </div>
              <br>
              <div>
                <label for="endereco" class="control-label">Endereço</label>
                <input type="text" name="endereco" size="60" required />
              </div>
              <br>
              <div>
                <label for="cidade" class="control-label">Cidade</label>
                <input type="text" name="cidade" size="60" required />
              </div>
              <br>
              <div>
                 <label for="uf" class="control-label">UF</label>
                 <select name="uf" required>
                    <option value="Acre">AC</option>
                    <option value="Alagoas">AL</option>
                    <option value="Amapá">AP</option>
                    <option value="Amazonas">AM</option>
                    <option value="Bahia">BA</option>
                    <option value="Ceará">CE</option>
                    <option value="Distrito Federal">DF</option>
                    <option value="Espírito Santo">ES</option>
                    <option value="Goiás">GO</option>
                    <option value="Maranhão">MA</option>
                    <option value="Mato Grosso">MT</option>
                    <option value="Mato Grosso do Sul">MS</option>
                    <option value="Minas Gerais">MG</option>
                    <option value="Pará">PA</option>
                    <option value="Paraiba">PB</option>
                    <option value="Paraná">PR</option>
                    <option value="Pernambuco">PE</option>
                    <option value="Piauí">PI</option>
                    <option value="Rio de Janeiro">RJ</option>
                    <option value="Rio Grande do Norte">RN</option>
                    <option value="Rio Grande do Sul">RS</option>
                    <option value="Rondônia">RO</option>
                    <option value="Roraima">RR</option>
                    <option value="Santa Catarina">SC</option>
                    <option value="São Paulo">SP</option>
                    <option value="Sergipe">SE</option>
                    <option value="Tocantins">TO</option>
                 </select>
              </div>
              <br>
              <div>
                <label for="celular" class="control-label">Celular</label>
                <input type="text" name="celular" size="" required />
              </div>
              <br>
              <div>
                <label for="email" class="control-label">Email</label>
                <input type="email" name="email" size="" required />
              </div><br>
              <div>                
                <p id="salvar"><button name="salvar" type="submit" value="salvar" class="salvando">Salvar</button></p>&nbsp;
               </div> 
            </form> 
        </div> 
        <div><br><br>
             <p class="form_name">Exclusão de Morador</p><br>
             <form method="POST" action="excluirmorador.php" class="form-estilo" id="formulario"  >
                <label for="nome" class="control-label">Digite o nome do Morador</label>
                <input type="text" id="nome" name="nome"><br><br>
                <p id="excluir"><button name="enviar" type="submit" value="Excluir">Excluir</button></p>
            </form>
            </div> 
        </div>     
    </body>
</html>