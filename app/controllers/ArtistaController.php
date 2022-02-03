<?php

class ArtistaController
{
    private $view;
    private $model;

    function __construct()
    {
        $this->view = new ViewController();
        $this->model = new ArtistaModel();
    }

    public function index()
    {

        $lista = $this->model->listar();
        echo $this->view->fillContent('ArtistaView', array('artistas' => $lista));    
    }

    public function cadastrar()
    {
        if(isset($_POST['nome']) && isset($_POST['pais'])
            && $_POST['nome'] != "" && $_POST['pais'] != ""){
            $this->model->cadastrar(array('nome'=>$_POST['nome'], 'pais'=>$_POST['pais']));
        }
    }

    public function remover()
    {
        if(isset($_POST['id']))
        $this->model->deletar($_POST['id']);
    }
}
