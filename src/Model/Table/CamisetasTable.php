<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Camisetas Model
 *
 * @method \App\Model\Entity\Camiseta newEmptyEntity()
 * @method \App\Model\Entity\Camiseta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Camiseta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Camiseta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Camiseta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Camiseta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Camiseta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Camiseta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Camiseta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Camiseta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Camiseta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Camiseta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Camiseta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CamisetasTable extends Table
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

        $this->setTable('camisetas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->decimal('preço')
            ->allowEmptyString('preço');

        $validator
            ->requirePresence('imagem', 'create')
            ->notEmptyFile('imagem');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 10)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }
}
