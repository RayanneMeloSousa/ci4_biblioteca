<div class="container">
    <h2>Livro</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#cadModal">
        Novo Livro
    </button>
    <?php
        foreach($listaObras as $Obra){
            $Obras[$Obra['id']] = $Obra['titulo'];
        }
    ?>
    <div class='row'>
        <?php foreach($listaLivros as $livro) : ?>
            <div class="col-3 mb-2">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title"><?=$Obras[$livro['id_obra']]?></h3>
                        <p class="card-text"><?='Disponibilidade: '?><?php
                if($livro['disponivel']==1){
                    echo 'disponivel';
                }else{
                    echo 'indisponivel';
                }    
            ?><br><?='Status: '?>
            <?php if($livro['status']=="integro"){
                echo 'Íntegro';
            }else{
                echo 'Danificado';
            }
            ?></p>
                        <?=anchor("Livro/editar/".$livro['id'],'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>',['class' => 'position-absolute top-0 end-0'])?>
                        <p class='card-text position-absolute bottom-0 end-0'><?='#'.$livro['id']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Livro/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Livro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="disponivel">Disponivel</label>
                        <select class='form-select' id="disponivel" name="disponivel">
                            <option value='1'>Disponível</option> 
                            <option value='0'>Indisponível</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class='form-select' id="status" name="status">
                            <option value='integro'>Íntegro</option>
                            <option value='danificado'>Danificado</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_obra">Obra</label>
                        <select required class='form-select' name='id_obra' id='id_obra'>
                            <?php foreach($listaObras as $livro) : ?>
                                <option value="<?=$livro['id']?>"><?=$livro['titulo']?></option>
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
