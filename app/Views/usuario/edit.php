<div class="container p-3">
    <?=form_open('Usuario/salvar')?>
    <input type="hidden" value='<?=$usuario['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="email">Nome</label>
        </div>
        <div class="col-10">
            <input required value='<?=$usuario['nome']?>' type="text" name="nome" id="nome" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label required for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['email']?>' type="email" name="email" id="email" class="form-control">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['telefone']?>' type="text" name="telefone" id="telefone" class="form-control">
        </div>
    </div>
    <div class="row p-4">
        <div class="btn-group" role="group">
        <a href="http://localhost:8080/index.php/Usuario/index" class="btn btn-outline-secondary">X</a>
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

    <?=form_open('Usuario/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$usuario['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir o usuario <?=$usuario['nome']?></p>
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