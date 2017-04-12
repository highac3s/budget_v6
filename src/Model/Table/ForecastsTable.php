<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forecasts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Accounts
 *
 * @method \App\Model\Entity\Forecast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Forecast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Forecast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Forecast|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Forecast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Forecast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Forecast findOrCreate($search, callable $callback = null, $options = [])
 */
class ForecastsTable extends Table
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

        $this->setTable('forecasts');
        $this->setDisplayField('id_forecast');
        $this->setPrimaryKey('id_forecast');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id',
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
            ->integer('id_forecast')
            ->allowEmpty('id_forecast', 'create');

        $validator
            ->numeric('month_amount_01')
            ->requirePresence('month_amount_01', 'create')
            ->notEmpty('month_amount_01');

        $validator
            ->numeric('month_amount_02')
            ->requirePresence('month_amount_02', 'create')
            ->notEmpty('month_amount_02');

        $validator
            ->numeric('month_amount_03')
            ->requirePresence('month_amount_03', 'create')
            ->notEmpty('month_amount_03');

        $validator
            ->numeric('month_amount_04')
            ->requirePresence('month_amount_04', 'create')
            ->notEmpty('month_amount_04');

        $validator
            ->numeric('month_amount_05')
            ->requirePresence('month_amount_05', 'create')
            ->notEmpty('month_amount_05');

        $validator
            ->numeric('month_amount_06')
            ->requirePresence('month_amount_06', 'create')
            ->notEmpty('month_amount_06');

        $validator
            ->numeric('month_amount_07')
            ->requirePresence('month_amount_07', 'create')
            ->notEmpty('month_amount_07');

        $validator
            ->numeric('month_amount_08')
            ->requirePresence('month_amount_08', 'create')
            ->notEmpty('month_amount_08');

        $validator
            ->numeric('month_amount_09')
            ->requirePresence('month_amount_09', 'create')
            ->notEmpty('month_amount_09');

        $validator
            ->numeric('month_amount_10')
            ->requirePresence('month_amount_10', 'create')
            ->notEmpty('month_amount_10');

        $validator
            ->numeric('month_amount_11')
            ->requirePresence('month_amount_11', 'create')
            ->notEmpty('month_amount_11');

        $validator
            ->numeric('month_amount_12')
            ->requirePresence('month_amount_12', 'create')
            ->notEmpty('month_amount_12');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));

        return $rules;
    }
}
