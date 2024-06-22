<div class="container p-3">
    <?=form_open('Livro/salvar')?>
    <input type="hidden" value='<?=$livro['id']?>' name="id">
    <div class="row p-2">
        <div class="col-2">
            <label for="disponivel">Disponível</label>
        </div>
        <div class="col-10">
            <select class='form-select' id="disponivel" name="disponivel">
                <option value='1'>Disponível</option>
                <option value='0'>Indisponível</option>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="status">Status</label>
        </div>
        <div class="col-10">

            <select class='form-select' name='status' id='status'>
                <option value='integro'>Íntegro</option>
                <option value='danificado'>Danificado</option>
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="id_obra">Obra</label>
        </div>
        <div class="col-10">
            <select required class='form-select' name='id_obra' id='id_obra'>
            <?php foreach($listaObras as $ob) : ?> 
                    <option value="<?=$ob['id']?>"><?=$ob['titulo']?></option>
            <?php endforeach?>
            </select>

        </div>
    </div>
    <div class="row p-4">
        <div class="btn-group" role="group">
        <a href="http://localhost:8080/index.php/Livro/index" class="btn btn-outline-secondary">X</a>
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

    <?=form_open('Livro/excluir')?>
        <div class="modal fade" id="excModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Livro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <input value='<?=$livro['id']?>' type="hidden" name="id">
                            <p>Você deseja excluir o livro <?=$ob['titulo']?></p>
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