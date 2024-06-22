<nav class="navbar navbar-expand-lg bg-warning mb-3">
  <style>
    .me{
      margin-right: 10px
    }
  </style>
  <div class="container">
    <?=anchor("home/index","Biblioteca",['class' => 'navbar-brand'])?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <?=anchor("Usuario/index","Usuario",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        
        <li class="nav-item">
          <?=anchor("Aluno/index","Aluno",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Autor/index","Autor",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Editora/index","Editora",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Obra/index","Obra",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Livro/index","Livro",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Emprestimo/index","Emprestimo",['class' => 'nav-link active','aria-current'=>'page'])?>
        </li>
        </ul>
        <p class="pull-left me"><?=session()->get('email')?></p>
        <button class="btn btn-dark pull-left" onclick="location.href='<?php echo base_url('login/logout') ?>'">
            <i class="fas fa-sign-out-alt"></i> Sair
          </button>
    </div>
  </div>
</nav>
