<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 * 
 * Esse controlador é responsável por chamar a view correta do usuário.
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * 
 */
class UsersController extends AppController
{
    /*
    *
    * Os métodos casacos(), camisetas(), colecionaveis(), bones() e index() passam as suas respectivas views um array contendo os produtos encontrados
    * no banco de dados, para que essas views possam acessar essa informação.
    *
    * O método carrinhoDeCompras() passa um array contendo todos os produtos na tabela carrinho_de_compras para que essa view possa acessar essa informação
    */

    /*Passa para as views desse controlador $this->Auth, para que elas tenham acesso ao usuário logado no momento*/
    public function beforeFilter(EventInterface $event)
    {
        $this->set('Auth', $this->Auth);

    }

    /*Nesse método, é carregado o handler de autenticação, para que seja possível logar no aplicativo como um usuário, e não como um visitante.*/
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

    /*Método responsável por fazer um cadastro de um novo usuário. Utiliza como layout geekstop 
    * Se o usuário já estiver cadastrado, será exibida uma mensagem dizendo que não foi possível cadastrar e que o email já está cadastrado
    * Por questões de segurança e privacidade, a senha não é salva no banco de dados, ela passa por um hash para depois ser salva.
    * O layout utilizado para essa view é geekstop
    */
    public function cadastro()
    {
        $this->viewBuilder()->setLayout('geekstop');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user->nome = $this->request->getData('nome');
            $user->email = $this->request->getData('email');
            $senha = $this->request->getData('senha');
            
            if($this->compararSenhas() && $this->validarSenha()){
                $user->senha = (new DefaultPasswordHasher)->hash($senha);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Usuário cadastrado com sucesso! Faça o login.'), ['key'=>'cadastroSuccessMessage']);
                    return $this->redirect(['controller'=>'Users', 'action'=>'login']);
                }
            }
            else{
                $this->Flash->error(__('Não foi possível cadastrar. Por favor, tente novamente.'), ['key'=>'cadastroErrorMessage']);
                return $this->redirect(['controller'=>'Users', 'action'=>'cadastro']);
            }
        }
        $this->set('user', $user);
        
    }

    /*método que irá retornar verdadeiro caso as senhas informadas no cadastro sejam iguais, e falso, caso contrário 
    * @return bool
    */
    private function compararSenhas() : bool
    {
        $senha = $this->request->getData('senha');
        $confirmarSenha = $this->request->getData('confirmarSenha');
        if($senha != $confirmarSenha){
            return false;
        }
        return true;
    }
    
    /*Método que irá retornar verdadeiro caso a senha tenha 10 ou mais caracteres. Caso, contrário, retorna falso 
    * @return bool
    */
    private function validarSenha() : bool
    {
        $senha = $this->request->getData('senha');
        if(strlen($senha) < 10){
            return false;
        }
        return true;
    }

    /* Método responsável por fazer o login de um usuário já cadastrado */
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

    /*Método responsável por fazer o logout do usuário e o redirecionar para a página de login*/
    public function logout()
    {
        echo $this->Flash->success(__('Logout efetuado com sucesso!'), ['key'=>'logoutSuccessMessage']);
        return $this->redirect($this->Auth->logout());
    }

    /*método para chamar a página inicial de um usuário. O layout utilizado para essa view é users*/
    public function index()
    {
        $this->viewBuilder()->setLayout('users');  
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query); 
    }

    /*
    *Método responsável por chamar a view camisetas na visão de um usuário. O layout utilizado para essa view é users
    */ 
    public function camisetas()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view bones na visão de um usuário. O layout utilizado para essa view é users*/
    public function bones()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view casacos na visão de um usuário. O layout utilizado para essa view é users*/
    public function casacos()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view colecionaveis na visão de um usuário. O layout utilizado para essa view é users*/
    public function colecionaveis()
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $query = $produtos->find('all');
        $this->set('produtos', $query);
    }

    /*Método responsável por chamar a view carrinho_de_compras na visão de um usuário. O layout utilizado para essa view é users*/
    public function carrinhoDeCompras()
    {
        $this->viewBuilder()->setLayout('users');

        $carrinho = TableRegistry::get('carrinho_de_compras');
        $query = $carrinho->find('all');
        $this->set('produtosCarrinho', $query);   
    }

    /*Método responsável por chamar a view perfil para mostrar detalhes do usuário. O layout utilizado para essa view é users*/
    public function perfil()
    {
        $this->viewBuilder()->setLayout('users');
    }

    /*Método responsável por chamar a view de detalhes de um produto na visão de um usuário. O layout utilizado para essa view é users*/
    public function detalhes($id)
    {
        $this->viewBuilder()->setLayout('users');
        $produtos = TableRegistry::get('produtos');
        $produto = $produtos->get($id);
        $this->set('produto', $produto);
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
