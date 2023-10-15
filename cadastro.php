<html>
    <head>
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
        <form method="POST" action="processa.php" class="form-estilo">
            <hr>
            <h2 class="titulo">Cadastre-se</h2>
            <hr>           
            <p id="login"><input type="text" name="login" class="form-control" placeholder="Digite seu usuário" ></p>
            <p id="login"><input type="password" name="senha" class="form-control" placeholder="Digite sua senha" ></p>
            <p id="login"><button name="btn-cadastrar" type="submit" class="btn btn-lg btn-info btn-block">Cadastrar</button></p>
        </form>
    </body>
</html>