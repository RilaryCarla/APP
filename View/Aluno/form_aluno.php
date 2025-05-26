<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="voewport" content="width=device-width, initial-scale=1.0">
        <title>Sistemas Bibliotecas = Cadastro de Aluno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dost/css/bootstrap.min.css" rel="stylesheet" integrity="sha381-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <?php include VIEWS . '/Includes/menu.php' ?>
            <h1>Cadastro de Alunos</h1>
            <?= $model->getErrors() ?>

            <form action="/aluno/cadastro" method="post" class="p-5">
                <input type="hidden" name="id" value="<?= $model->Id ?>">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" value="<?= $model->Nome ?>" name="nome" id="nome">
                </div>
                <div class="mb-3">
                    <label for="ra" class="form-label">RA:</label>
                    <input type="text" class="form-control" value="<?= $model->Curso ?>" name="curso" id="ra">
                </div>
                <div class="mb-3">
                    <label for="curso" class="form-label">Curso:</label>
                    <input type="text" class="form-control" value="<?= $model->Curso ?>" name="curso" id="curso">
                </div>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
    </html>