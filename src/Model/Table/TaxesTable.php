<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taxes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Tax get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tax newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tax[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tax|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tax patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tax[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tax findOrCreate($search, callable $callback = null, $options = [])
 */
class TaxesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('taxes');
        $this->setDisplayField('id_taxes');
        $this->setPrimaryKey('id_taxes');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_taxes')
            ->allowEmpty('id_taxes', 'create');

        $validator
            ->date('province_date')
            ->requirePresence('province_date', 'create')
            ->notEmpty('province_date');

        $validator
            ->numeric('province_value')
            ->requirePresence('province_value', 'create')
            ->notEmpty('province_value');

        $validator
            ->date('federal_date')
            ->requirePresence('federal_date', 'create')
            ->notEmpty('federal_date');

        $validator
            ->numeric('federal_value')
            ->requirePresence('federal_value', 'create')
            ->notEmpty('federal_value');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
