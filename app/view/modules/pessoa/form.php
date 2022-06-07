<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        <style>
            fieldset{
                margin: auto;
                width: 30%;
                position: relative;
            }
            label, input{
                display: block;
            }
        </style>
    </head>

    <body>
        <fieldset>
            <legend>Cadastro de Pessoas</legend>
            <form method="post" action="/pessoa/form/save">
                <label for="nome">nome:</label>
                <input id="nome" name="nome" type="text">

                <label for="cpf">cpf:</label>
                <input id="cpf" name="cpf" type="number">

                <label for="data_nascimento">data de nascimento:</label>
                <input id="data_nascimento" name="data_nascimento" type="date">

                <button type="submit">enviar</button>
            </form>
        </fieldset>
    </body>
</html>