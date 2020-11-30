<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function beforeFilter(EventInterface $event)
    {
        $this->set('Auth', $this->Auth);

    }

    public function initialize(): void
    {
        parent:: initialize();
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'senha'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);
        $this->Auth->Allow('cadastro', 'login');
    }


    public function cadastro()
    {
        $this->viewBuilder()->setLayout('geekstop');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            //$user = $this->Users->patchEntity($user, $this->request->getData());
            $user->nome = $this->request->getData('nome');
            $user->email = $this->request->getData('email');
            $senha = $this->request->getData('senha');
            $this->compararSenhas();
            $this->validarSenha();
            $user->senha = (new DefaultPasswordHasher)->hash($senha);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso! Faça o login.'), ['key'=>'cadastroSuccessMessage']);
                return $this->redirect(['controller'=>'Users', 'action'=>'login']);
            }
            $this->Flash->error(__('Não foi possível cadastrar. Por favor, tente novamente.'), ['key'=>'cadastroErrorMessage']);
        }
        $this->set('user', $user);
        
    }

    private function compararSenhas(){
        $senha = $this->request->getData('senha');
        $confirmarSenha = $this->request->getData('confirmarSenha');
        if($senha != $confirmarSenha){
            return false;
        }
    }
    
    private function validarSenha(){
        $senha = $this->request->getData('senha');
        if(strlen($senha) < 10){
            return false;
        }
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('geekstop');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl(['controller'=>'Users', 'action'=>'index']));
            }
            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'), ['key'=>'loginErrorMessage']);
        }
    }

    public function logout()
    {
        echo $this->Flash->success(__('Logout efetuado com sucesso!'), ['key'=>'logoutSuccessMessage']);
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('users');  
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query); 
    }

    public function camisetas()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function bones()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function casacos()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function colecionaveis()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    public function carrinhoDeCompras()
    {
        $this->viewBuilder()->setLayout('users');
    }

    


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
