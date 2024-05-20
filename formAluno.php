
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 m-3 p-3">
        <h1>Cadastro de Aluno</h1>
        <form action="cadastraAluno.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome do Aluno</label>
                <input class="form-control" type="text" name="nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input class="form-control" type="text" name="cpf" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="dn">Data de nascimento</label>
                <input type="date" name="dn" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="fone">Telefone</label>
                <input type="phone" name="fone" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="curso">Curso</label>
                <select class="form-select" name="curso">
                    <option value="1">ADS</option>
                    <option value="2">Odontologia</option>
                    <option value="3">Biomedicina</option>
                </select>
            </div>
            <input class="btn btn-outline-success" type="submit" value="Finalizar">
        </form>
    </div>
    <div class="col-md-3"></div>
</div>