<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Table3 Model
 *
 * @method \App\Model\Entity\Table3 newEmptyEntity()
 * @method \App\Model\Entity\Table3 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Table3[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Table3 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Table3 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Table3 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Table3[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Table3|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table3 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table3[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table3[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table3[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table3[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Table3Table extends Table
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

        $this->setTable('table3');
        $this->belongsTo('Table22');
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
            ->scalar('Substances')
            ->maxLength('Substances', 8)
            ->allowEmptyString('Substances');

        $validator
            ->scalar('RelatedInformation')
            ->maxLength('RelatedInformation', 211)
            ->allowEmptyString('RelatedInformation');

        return $validator;
    }
}
