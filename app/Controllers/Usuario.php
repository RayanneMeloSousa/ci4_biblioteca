<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    private $usuarioModel;
    public function __construct(){
        $this->usuarioModel = new UsuarioModel();
    }
    public function index()
    {
        $dados = $this->usuarioModel->findAll();
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('usuario/index',['listaUsuarios' => $dados]);
        echo view('_partials/footer');
    }
    public function cadastrar()
    {
        $usuario = $this->request->getPost();
        $usuario['senha'] = md5("senhaforte");
        $this->usuarioModel->save($usuario);
        return redirect()->to('Usuario/index');
    }
    public function editar($id)
    {
        $dados = $this->usuarioModel->find($id);
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('usuario/edit',['usuario' => $dados]);
        echo view('_partials/footer');
    }
    public function salvar(){
        $dados = $this->request->getPost();
        $this->usuarioModel->save($dados);
        return redirect()->to('Usuario/index');
    }
    public function excluir(){
        $dados = $this->request->getPost();
        $this->usuarioModel->delete($dados);
        return redirect()->to('Usuario/index');
    }
}