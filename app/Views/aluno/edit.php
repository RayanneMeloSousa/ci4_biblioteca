<div class="container p-3">
    <?=form_open('Aluno/salvar')?>
    <input type="hidden" value='<?=$aluno['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="cpf">CPF</label>
        </div>
        <div class="col-10">
            <input required value='<?=$aluno['cpf']?>' type="text" name="cpf" id="cpf" class="form-control" disabled>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input required value='<?=$aluno['nome']?>' type="text" name="nome" id="nome" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['email']?>' type="email" name="email" id="email" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input value='<?=$aluno['telefone']?>' type="text" name="telefone" id="telefone" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="turma">Turma</label>
        </div>
        <div class="col-10">
            <?php
            $turmas = ['1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D']
            ?>
            <select class="form-select"name="turma" id="turma" required>
                <?php foreach($turmas as $t) : ?>
                    <option value="<?=$t?>"><?=$t?></option>
                <?php endforeach?>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="btn-group" role="group">
        <a href="http://localhost:8080/index.php/Aluno/index" class="btn btn-outline-secondary">X</a>
            <button type="submit" class="btn btn-outline-success">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>
            </button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#excModal">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                </svg>
            </button>
        </div>
    </div>
    <?=form_close()?>

    <?=form_open('Aluno/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Aluno?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$aluno['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir o aluno <?=$aluno['nome']?></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close()?>
</div>