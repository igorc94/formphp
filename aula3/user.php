<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="estilo.css">
            <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <title>Formulario</title>
        <style>
        body{font-family: 'Sen', sans-serif; font-size: 20px;
               }
        </style>
        <h2 style="color:black"><div align="center">Resultado de Cadastro:</div></h2>
    </head>
    <body>
        <div align="center">
            Olá, <?php session_start();
             echo $_POST["login"]; 
             $_SESSION['log'] = 'login';
             ?>.
            <br>
            Seu cadastro atual:
            <br>
            <br>
            Seu nome: <?php echo $_POST["nome"];
            $_SESSION['name'] = 'nome'; ?>.
            <br>
            Seu email: <?php echo $_POST["email"];
            $_SESSION['correo'] = 'email'; ?>.
            <br>
            
            Hora atual: <?php echo strftime( '%d-%m-%Y %H:%M:%S', strtotime('now') );?>
            <?php
            echo '<br /><a href="index.php">Retornar</a>';
            ?>
                </div>
    </body>
</html>