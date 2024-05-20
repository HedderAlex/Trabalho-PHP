<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trabalho PHP</title>
</head>
<body>
<div class="container-fluid">
        <?php
            include 'menu.php';
        ?>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="view" class="form-label">Visualizacao</label>
                <select class="form-select" name="view">
                    <option value="1">Cursos</option>
                    <option value="2">Alunos</option>
                </select>
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Buscar">
        </form>
        <?php
            if($_POST["view"] == 1){

            }
            else if($_POST["view"] == 2){
                
            }
        ?>
    </div>
</body>
</html>