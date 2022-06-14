<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas - Cadastro de Funcionários</title>
</head>

    <body>

        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Primeiro acesso</h1>
        </header>
        <hr>
        <br>


                <!--FORMULÁRIO DE CADASTRO DE DADOS PARA O PRIMEIRO ACESSO-->    
                <form action="criaracessoinicial2.php" method="post">

                    <fieldset>

                        <legend>GERAR CREDENCIAIS PARA PRIMEIRO ACESSO NO SISTEMA</legend>

                        <br>

                        <label>Matrícula: </label><input type="text" name="matricula" required="required"><br><br>
                        <label>Nova senha: </label><input type="password" name="senha" required="required"><br><br>

                        <input type="submit" value="Gerar acesso">

                        <br>
                        <br>
                        
                        <a href="index.php">Voltar à página de login</a>

                    </fieldset>

                </form>


        <!--RODAPÉ-->
        <br>
        <hr>
        <footer>
            <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
        </footer>

    </body>

</html>