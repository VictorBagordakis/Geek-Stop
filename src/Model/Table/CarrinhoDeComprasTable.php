<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CarrinhoDeCompras Model
 *
 * @method \App\Model\Entity\CarrinhoDeCompra newEmptyEntity()
 * @method \App\Model\Entity\CarrinhoDeCompra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra get($primaryKey, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarrinhoDeComprasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carrinho_de_compras');
        $this->setDisplayField('idUser');
        $this->setPrimaryKey(['idUser', 'idProduto']);

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idUser')
            ->requirePresence('idUser', 'create')
            ->notEmptyString('idUser');

        $validator
            ->integer('idProduto')
            ->requirePresence('idProduto', 'create')
            ->notEmptyString('idProduto');

        $validator
            ->integer('quantidade')
            ->notEmptyString('quantidade');

        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }
}
