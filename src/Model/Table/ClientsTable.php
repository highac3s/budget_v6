<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \Cake\ORM\Association\HasMany $Categories
 * @property \Cake\ORM\Association\HasMany $PaymentMethods
 * @property \Cake\ORM\Association\HasMany $Places
 * @property \Cake\ORM\Association\HasMany $Taxes
 * @property \Cake\ORM\Association\HasMany $TransTypes
 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_client');

        $this->hasMany('Categories', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('PaymentMethods', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Places', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Taxes', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('TransTypes', [
            'foreignKey' => 'client_id'
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
            ->integer('id_client')
            ->allowEmpty('id_client', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->integer('buyer_nb')
            ->requirePresence('buyer_nb', 'create')
            ->notEmpty('buyer_nb');

        return $validator;
    }
}
