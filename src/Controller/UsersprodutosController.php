<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usersprodutos Controller
 *
 * @property \App\Model\Table\UsersprodutosTable $Usersprodutos
 * @method \App\Model\Entity\Usersproduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersprodutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usersprodutos = $this->paginate($this->Usersprodutos);

        $this->set(compact('usersprodutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Usersproduto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersproduto = $this->Usersprodutos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usersproduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersproduto = $this->Usersprodutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersproduto = $this->Usersprodutos->patchEntity($usersproduto, $this->request->getData());
            if ($this->Usersprodutos->save($usersproduto)) {
                $this->Flash->success(__('The usersproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersproduto could not be saved. Please, try again.'));
        }
        $this->set(compact('usersproduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersproduto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersproduto = $this->Usersprodutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersproduto = $this->Usersprodutos->patchEntity($usersproduto, $this->request->getData());
            if ($this->Usersprodutos->save($usersproduto)) {
                $this->Flash->success(__('The usersproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersproduto could not be saved. Please, try again.'));
        }
        $this->set(compact('usersproduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersproduto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersproduto = $this->Usersprodutos->get($id);
        if ($this->Usersprodutos->delete($usersproduto)) {
            $this->Flash->success(__('The usersproduto has been deleted.'));
        } else {
            $this->Flash->error(__('The usersproduto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
