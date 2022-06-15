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
                
                <br>
                        
                        <fieldset>
                            <legend><b>Regras para gerar as primeiras credenciais de acesso ao sistema</b></legend>
                                <p><b><i>1 - A matrícula deve ser em valor numérico e é um valor definitivo. Ou seja, não é possível mais alterar o respectivo dado. Essa característica é aplicável somente à matrícula. Os demais dados podem ser alterados.</p>
                                <p>2 - É recomendada a utilização de uma senha segura que envolva números, alternância de letras maiúsculas e minúsculas e caracteres especiais.</i></b></p>
                        </fieldset>

                    <br>
                
                <form action="criaracessoinicial2.php" method="post">

                    <fieldset>

                        <label>Matrícula: </label><input type="number" name="matricula" required="required"><br><br>
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