<?php

namespace App\Controller;
use Cake\Event\EventInterface;


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
        
    }

    public function camisetas()
    {

    }

    public function casacos()
    {

    }

    public function colecionaveis()
    {

    }

    public function bones()
    {

    }

    public function ajuda()
    {

    }
}