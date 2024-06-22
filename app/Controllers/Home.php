<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\HomeModel;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    private $homeModel;

    public function __construct(){
        $this->session = \Config\Services::session();
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        $dados = $this->homeModel->findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('home/index',['home' => $dados]);
        echo view('_partials/footer');
    }
}
