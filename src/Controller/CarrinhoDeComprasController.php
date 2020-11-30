<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CarrinhoDeCompras Controller
 *
 * @property \App\Model\Table\CarrinhoDeComprasTable $CarrinhoDeCompras
 * @method \App\Model\Entity\CarrinhoDeCompra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarrinhoDeComprasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $carrinhoDeCompras = $this->paginate($this->CarrinhoDeCompras);

        $this->set(compact('carrinhoDeCompras'));
    }

    public function adicionarAoCarrinhoDeCompras()
    {
        
    }

    /**
     * View method
     *
     * @param string|null $id Carrinho De Compra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrinhoDeCompra = $this->CarrinhoDeCompras->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carrinhoDeCompra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrinhoDeCompra = $this->CarrinhoDeCompras->newEmptyEntity();
        if ($this->request->is('post')) {
            $carrinhoDeCompra = $this->CarrinhoDeCompras->patchEntity($carrinhoDeCompra, $this->request->getData());
            if ($this->CarrinhoDeCompras->save($carrinhoDeCompra)) {
                $this->Flash->success(__('The carrinho de compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrinho de compra could not be saved. Please, try again.'));
        }
        $this->set(compact('carrinhoDeCompra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrinho De Compra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrinhoDeCompra = $this->CarrinhoDeCompras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrinhoDeCompra = $this->CarrinhoDeCompras->patchEntity($carrinhoDeCompra, $this->request->getData());
            if ($this->CarrinhoDeCompras->save($carrinhoDeCompra)) {
                $this->Flash->success(__('The carrinho de compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrinho de compra could not be saved. Please, try again.'));
        }
        $this->set(compact('carrinhoDeCompra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrinho De Compra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrinhoDeCompra = $this->CarrinhoDeCompras->get($id);
        if ($this->CarrinhoDeCompras->delete($carrinhoDeCompra)) {
            $this->Flash->success(__('The carrinho de compra has been deleted.'));
        } else {
            $this->Flash->error(__('The carrinho de compra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
