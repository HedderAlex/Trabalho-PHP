<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Aluno</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../TrabalhoPHP/index.php">Trabalho PHP</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="AlunoForm.php">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CursoForm.php">Cursos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="mb-4 p-2 center">Cadastro de Alunos</h1>
                <form action="AlunoForm.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="cpf">CPF</label>
                        <input class="form-control" type="text" name="cpf" maxlength="11" minlength="11" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nasc">Data de Nascimento</label>
                        <input class="form-control" type="date" name="nasc" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="mail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telefone">Telefone</label>
                        <input class="form-control" type="text" name="telefone" required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="curso">Curso</label>
                        <select class="form-control" name="curso">
                        <?php
                            $cursos = [];
                            $result = $conn->query("SELECT id, nome, tipo FROM curso");
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $cursos[] = $row;
                                }
                            }
                            foreach ($cursos as $curso) {
                                echo '<option value="' . $curso['id'] . '">' . $curso['nome'] . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <input class="btn btn-outline-success" type="submit" value="Salvar">
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>