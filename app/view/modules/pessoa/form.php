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
                
                <!-- input para pegar id -->
                <input type="hidden" name="id" value="<?= $model->id ?>">

                <label for="nome">nome:</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text">

                <label for="cpf">cpf:</label>
                <input id="cpf" name="cpf" type="number" value="<?= $model->cpf ?>">

                <label for="data_nascimento">data de nascimento:</label>
                <input id="data_nascimento" name="data_nascimento" type="date" value="<?= $model->data_nascimento ?>">

                <button type="submit">enviar</button>
            </form>
        </fieldset>
    </body>
</html>