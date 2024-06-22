<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LivroModel;
use App\Models\ObraModel;

class Livro extends BaseController
{
    private $livroModel;
    private $obraModel;

    public function __construct(){
        $this->livroModel = new LivroModel();
        $this->obraModel = new ObraModel();
    }
    public function index()
    {
        $dados = $this->livroModel->findAll();
        $obras = $this->obraModel->findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('livro/index',['listaLivros' => $dados, 'listaObras'=>$obras]);
        echo view('_partials/footer');
    }
    public function cadastrar()
    {
        $dados = $this->request->getPost();
        $this->livroModel->save($dados);
        return redirect()->to('livro/index');
    }
    public function modificar($id_livro)
    {
        $dados = $this->livroModel->find($id_livro);
        $dados['disponivel'] = 'indisponivel';
        $this->livroModel->save($dados);
        return redirect()->to('emprestimo/index');
    }
    public function editar($id)
    {
        $dados = $this->livroModel->find($id);
        $obras = $this->obraModel->findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('livro/edit',['livro' => $dados, 'listaObras' => $obras]);
        echo view('_partials/footer');
    }
    public function salvar(){
        $dados = $this->request->getPost();
        $this->livroModel->save($dados);
        return redirect()->to('Livro/index');
    }
    public function excluir(){
        $dados = $this->request->getPost();
        $this->livroModel->delete($dados);
        return redirect()->to('Livro/index');
    }
}
