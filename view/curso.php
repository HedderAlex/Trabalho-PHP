<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Curso</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Cadastro de Cursos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="../controller/CursoController.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select name="tipo">
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                            <option value="4">Integral</option>
                        </select>
                    </div>
                    <input type="submit" name="cadastrar" value="Salvar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Açoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(isset($cursoDao)){
                            foreach ($cursoDao->read() as $c1) : 
                    ?>
                        <tr>
                            <td><?= $c1->getId() ?></td>
                            <td><?= $c1->getNome() ?></td>
                            <td><?= $c1->getTipo() ?></td>
                            <td>
                                <a href="controller/CursoController.php?del=<?= $c1->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    <?php 
                        } 
                    ?>
                    </tbody>
                  </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>