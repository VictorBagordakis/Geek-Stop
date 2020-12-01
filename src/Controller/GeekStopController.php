<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/* Esse controlador é responsável por chamar a view correta para um visitante do site.*/

class GeekStopController extends AppController
{
    /*
    *
    * Os métodos casacos(), camisetas(), colecionaveis(), bones() e index() passam as suas respectivas views um array contendo os produtos encontrados
    * no banco de dados, para que essas views possam acessar essa informação.
    *
    */

    /*Esse método define "geekstop" como layout para as views desse controlador*/
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('geekstop');
    }

    /*método para a chamar a página inicial de um visitante*/
    public function index()
    {
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);   
    }

    /*Método responsável por chamar a view carrinho de compras na visão de um visitante*/
    public function carrinhoDeCompras()
    {
        
    }

    /*Método responsável por chamar a view casacos na visão de um visitante*/
    public function casacos()
    {
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view camisetas na visão de um visitante*/
    public function camisetas(){
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view colecionaveis na visão de um visitante*/
    public function colecionaveis(){
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view bones na visão de um visitante*/
    public function bones(){
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view de detalhes de um produto na visão de um visitante*/
    public function detalhes(string $id)
    {
        $produtos = TableRegistry::get('produtos');
        $produto = $produtos->get($id);
        $this->set('produto', $produto);
    }

}