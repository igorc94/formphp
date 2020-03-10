<html>
    <head>
            <link rel="stylesheet" type="text/css" href="estilo.css">
            <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <title>Formulario</title>
        <style>
        body{font-family: 'Sen', sans-serif; font-size: 20px;
               }
        </style>
        <h2 style="color:black"><div align="center">Cadastro Usuario</div></h2>
    </head>
    <body>
        <div align="center">
            <form action="user.php" method="POST" target="_blank">
                <?php
                $var_value = $_SESSION['log'];
                if($log == )

                <br>
                    <br>
                    <div class="desc">Login:</div>  <input type="text" id="login" name="login"><br />
                    
                    <br>
                    <div class="desc">Nome:</div>    <input type="text" id="nome" name="nome"><br />

                    <br>
                    <div class="desc">Email:</div>    <input type="text" id="email" name="email"><br />
                    <br>
                    <div class="desc">Senha:</div>    <input type="password" id="senha" name="senha"><br />
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                    
                  </form>
                </div>
    </body>
</html>