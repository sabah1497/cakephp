<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Table4 Model
 *
 * @method \App\Model\Entity\Table4 newEmptyEntity()
 * @method \App\Model\Entity\Table4 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Table4[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Table4 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Table4 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Table4 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Table4[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Table4|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table4 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Table4[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table4[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table4[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Table4[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Table4Table extends Table
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

        $this->setTable('table4');
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
            ->maxLength('RelatedInformation', 376)
            ->allowEmptyString('RelatedInformation');

        return $validator;
    }
}
