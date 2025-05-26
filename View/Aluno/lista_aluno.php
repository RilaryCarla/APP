<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistemas Biblioteca - Cadastro de aluno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <?php include VIEWS . '/includes/menu.php' ?>

            <h1>Lista de alunos</h1>
            <a href="/aluno/cadastro">Novo Aluno</a>
            <?= $model->getErrors() ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($model->rows as $aluno): ?> <?php endforeach ?>
                </tbody>
        </div>
    </body>