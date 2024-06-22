<div class="container">
    <h2>Obra</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#cadModal">
        Nova Obra
    </button>
    <?php
        foreach($listaEditoras as $editora){
            $editoras[$editora['id']] = $editora['nome'];
        }
    ?>
    <div class='row'>
        <?php foreach($listaObras as $ob) : ?>
            <div class="col-3 mb-2">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title"><?=$ob['titulo']?></h3>
                        <p class="card-text"><?='Categoria: '.$ob['categoria']?><br><?='Ano: '.$ob['ano_publicacao']?><br><?='ISBN: '.$ob['isbn']?><br><?='Editora: '.$editoras[$ob['id_editora']]?><br></p>
                        <?=anchor("Obra/editar/".$ob['id'],'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>',['class' => 'position-absolute top-0 end-0'])?>
                        <p class='card-text position-absolute bottom-0 end-0'><?='#'.$ob['id']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Obra/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Obra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input required class='form-control' type="text" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input class='form-control' type="text" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="ano_publicacao">Ano</label>
                        <input class='form-control' type="text" id="ano_publicacao" name="ano_publicacao">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input required class='form-control' type="text" id="isbn" name="isbn">
                    </div>
                    <div class="form-group">
                        <label for="id_editora">Editora</label>
                        <select required class='form-select' name='id_editora' id='id_editora'>
                        <option value="">Selecione uma Editora</option>
                        <?php foreach($listaEditoras as $editora) : ?>
                            <option value="<?=$editora['id']?>"><?=$editora['nome']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>
