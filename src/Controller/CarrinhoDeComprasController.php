<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

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

    /*Método para adicionar um novo produto ao carrinho de compras. Se o produto já estiver no carrinho de compras do usuário,
    a quantida não é incrementada, e o produto não é salvo novamente. O produto só será salvo se ele não estiver no carrinho
    anteriormente */
    public function adicionarAoCarrinhoDeCompras($idProduto, $idUser)
    {
        $condicoes = array('idProduto'=>$idProduto,
                           'idUser'=>$idUser);
        if(TableRegistry::get('CarrinhoDeCompras')->exists(['idUser' => $idUser, 'idProduto' => $idProduto])){
            return $this->redirect(['controller'=>'Users', 'action'=>'carrinhoDeCompras']);    
        }

        else{
            $novoProdutoCarrinho = $this->CarrinhoDeCompras->newEmptyEntity();
            $novoProdutoCarrinho->idUser = $idUser;
            $novoProdutoCarrinho->idProduto = $idProduto;
            $novoProdutoCarrinho->quantidade += 1;
            
            if ($this->CarrinhoDeCompras->save($novoProdutoCarrinho)) {
                $this->Flash->success(__('Esse produto foi adicionado ao seu carrinho.'), ['key'=>'carrinhoSuccessMessage']);
                return $this->redirect(['controller'=>'Users', 'action'=>'carrinhoDeCompras']);
            }
            $this->Flash->error(__('Não foi possível adicionar o produto ao carrinho.'), ['key'=>'carrinhoErrorMessage']);
        }
    }

    /* Método responsáve por incrementar a quantidade de um determinado produto no carrinho de compras do usuário*/
    public function adicionarUmAoCarrinhoDeCompras($id){
        $carrinho = TableRegistry::get('carrinho_de_compras');
        $produtoCarrinho = $carrinho->get($id);
        $produtoCarrinho->quantidade += 1;
        if($this->CarrinhoDeCompras->save($produtoCarrinho)){
            $this->Flash->success(__('Esse produto foi adicionado ao seu carrinho.'), ['key'=>'adicionarMaisUmSuccessMessage']);
            return $this->redirect(['controller'=>'Users', 'action'=>'carrinhoDeCompras']);
        }
        $this->Flash->error(__('Não foi possível adicionar o produto ao carrinho.'), ['key'=>'adicionarMaisUmErrorMessage']);
    }

    /* Método responsável por remover um determinado produto de um carrinho de compras. Se a quantidade chegar a 0, o
    * produto é removido do banco de dados */
    public function removerUmDoCarrinhoDeCompras($id){
        $carrinho = TableRegistry::get('carrinho_de_compras');
        $produtoCarrinho = $carrinho->get($id);
        if($produtoCarrinho->quantidade > 1){
            $produtoCarrinho->quantidade -= 1;
            $carrinho->save($produtoCarrinho);
            return $this->redirect(['controller'=>'Users', 'action'=>'carrinhoDeCompras']);
        }
        else{
            $carrinho->delete($produtoCarrinho);
            return $this->redirect(['controller'=>'Users', 'action'=>'carrinhoDeCompras']);
        }
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
