<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usersprodutos Model
 *
 * @method \App\Model\Entity\Usersproduto newEmptyEntity()
 * @method \App\Model\Entity\Usersproduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usersproduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usersproduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usersproduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usersproduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usersproduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usersproduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usersproduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usersproduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usersproduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usersproduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usersproduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersprodutosTable extends Table
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

        $this->setTable('usersprodutos');
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

        return $validator;
    }
}
