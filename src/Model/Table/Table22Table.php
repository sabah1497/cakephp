<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Table22 Model
 *
 * @method \App\Model\Entity\Table22 newEmptyEntity()
 * @method \App\Model\Entity\Table22 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Table22[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Table22 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Table22 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Table22 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Table22[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Table22|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table22 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table22[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table22[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table22[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table22[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Table22Table extends Table
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

        $this->setTable('table22');

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
            ->scalar('Substance ID')
            ->maxLength('Substance ID', 8)
            ->allowEmptyString('Substance ID');
            

        $validator
            ->scalar('EC number')
            ->maxLength('EC number', 20)
            ->allowEmptyString('EC number');

        $validator
            ->scalar('CAS number')
            ->maxLength('CAS number', 21)
            ->allowEmptyString('CAS number');

        $validator
            ->scalar('Substance name')
            ->maxLength('Substance name', 174)
            ->allowEmptyString('Substance name');

        return $validator;
    }
}
