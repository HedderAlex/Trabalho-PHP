<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 m-3 p-3">
        <h1>Cadastro de Curso</h1>
        <form action="adicionaCurso.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome do Curso</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-select" name="tipo">
                    <option value="1">Matutino</option>
                    <option value="2">Verspertino</option>
                    <option value="3">Noturno</option>
                    <option value="4">Integral</option>
                </select>
            </div>
            <input class="btn btn-outline-success" type="submit" value="Finalizar">
        </form>
    </div>
    <div class="col-md-3"></div>
</div>