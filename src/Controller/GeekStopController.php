<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

class GeekStopController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('geekstop');


    }

    public function index()
    {
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);   
    }


    public function ajuda()
    {

    }

    public function carrinhoDeCompras()
    {
        
    }

    public function casacos()
    {
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function camisetas(){
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function colecionaveis(){
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function bones(){
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function detalhes($id)
    {
        $this->viewBuilder()->setLayout('geekstop');
        $produtos = TableRegistry::get('produtos');
        $produto = $produtos->get($id);
        $this->set('produto', $produto);
    }

}