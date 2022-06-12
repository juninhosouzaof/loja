<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Controle de estoque e gestão</title>
</head>

<body>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Login - Loja de Roupas</h1>
    </header>
    <hr>
    <br>

    <!--FORMULÁRIO DE LOGIN-->
    <fieldset>

        <form action="abrirsessao.php" method="post">

            <label>Matrícula: </label><input type="text" name="matricula" required="required">
            <br>
            <label>Senha: </label><input type="password" name="senha" required="required">
            <br>
            <br>
            <input type="submit" value="Entrar">

        </form>

    </fieldset>




    <!--RODAPÉ-->
    <br>
    <hr>
    <footer>
        <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
    </footer>
</body>

</html>