<?php
//conexão com o banco de dados
include("conexao.php");  

//iniciando a sessão
session_start();

//ação do botão entrar

if(empty ($login))

if(isset($_POST['btn-entrar'])): 
    $erros = array();
    $login = mysqli_escape_string($mysqli, $_POST['login']);
    $senha = mysqli_escape_string($mysqli, $_POST['senha']);

    if(empty($login) or empty($senha)):
        echo "O campo usuário e senha precisa ser preenchido!";
    
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $result = mysqli_query($mysqli, $sql);

        //verificação se o registro existe no banco de dados
        if(mysqli_num_rows($result) > 0):

            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $result = mysqli_query($mysqli, $sql);

            if(mysqli_num_rows($result) == 1):
                $dados = mysqli_fetch_array($result);
                $_SESSION['logado'] = true;
                $_SESSION['login_usuarios'] = $dados['id'];
                setcookie("login",$login);
                echo"<script language='javascript' type='text/javascript'>
                alert('Login efetuado com sucesso!');window.location.
                href='index.html'</script>";
                //header('Location: index.html');
            else:
                echo "<script language='javascript' type='text/javascript'>
                alert('Usuário e senha não conferem');window.location.
                href='login.php'</script>";;       
            endif;  

            else:
                echo "<script language='javascript' type='text/javascript'>
                alert('Usuário inexistente');window.location.
                href='login.php'</script>";  
        endif;
    endif;    
endif;
?>
<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width" />
        <link href="estilo.css" rel="stylesheet" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/estilo.css">
        <title>Login</title>
    </head>
    <body>
        <div>
        <nav class="menu">
            <ul>
                <li>
                    <h1>Tecthi Sistema de Gestão de Condomínio</h1>
                 </li> 			
			</ul>
        </nav>
        </div>
        <form action="login.php" method="POST" class="form-estilo">
            <hr>
            <h2 class="titulo">Efetue o login</h2>
            <hr>           
            <p id="login"><input type="text" name="login" class="form-control" placeholder="Digite seu usuário"  ></p>
            <p id="login"><input type="password" name="senha" class="form-control" placeholder="Digite sua senha" ></p>
            <a href="cadastro.php">Ainda não tem cadastro? Clique aqui</a><br><br>
            <p id="login"><button name="btn-entrar" type="submit" class="btn btn-lg btn-info btn-block">Entrar</button></p>
        </form>
    </body>
</html>


 