<div class="container">
    <h2>Aluno</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#cadModal">
        Novo Aluno
    </button>
    <div class='row'>
        <?php foreach($listaAlunos as $a) : ?>
            <div class="col-3 mb-2">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title"><?=$a['nome']?></h3>
                        <p class="card-text"><?='CPF: '.$a['cpf']?><br><?='Email: '.$a['email']?><br><?='Telefone: '.$a['telefone']?><br><?='Turma: '.$a['turma']?><br></p>
                        <?=anchor("Aluno/editar/".$a['id'],'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>',['class' => 'position-absolute top-0 end-0'])?>
                        <p class='card-text position-absolute bottom-0 end-0'><?='#'.$a['id']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Aluno/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Aluno</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input required class='form-control' type="text" id="cpf" name="cpf">
                    </div>
                    <div class="form-group">
                        <label required for="nome">Nome</label>
                        <input class='form-control' type="text" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class='form-control' type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input class='form-control' type="text" id="telefone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="turma">Turma</label>
                        <select required id="turma" name="turma" class='form-select'>
                            <option value="1a">1 A</option>
                            <option value="1b">1 B</option>
                            <option value="1c">1 C</option>
                            <option value="1d">1 D</option>
                            <option value="2a">2 A</option>
                            <option value="2b">2 B</option>
                            <option value="2c">2 C</option>
                            <option value="2d">2 D</option>
                            <option value="3a">3 A</option>
                            <option value="3b">3 B</option>
                            <option value="3c">3 C</option>
                            <option value="3d">3 D</option>
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
