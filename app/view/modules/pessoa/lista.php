<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<title>lista de pessoas</title>
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
        <table>
			<tr>
                <th></th>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Data de Nascimento</th>
	    	</tr>
	
	   		<?php foreach($model->rows as $item): ?>
				<tr>
                    <td><a href="/pessoa/delete?id=<?= $item->id ?>">X</a></td>

		            <td><?= $item->id ?></td>

		            <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"> <?= $item->nome ?> </a>
                    </td>

		            <td><?= $item->cpf ?></td>
		            <td><?= $item->data_nascimento ?></td>
				</tr>
			<?php endforeach ?>

            <?php if (count($model->rows) == 0): ?>
                <td colspan="5">Nenhum registro encontrado!</td>
            <?php endif ?>
        </table>
    </body>
</html>