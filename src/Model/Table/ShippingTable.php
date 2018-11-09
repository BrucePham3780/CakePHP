<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shipping Model
 *
 * @method \App\Model\Entity\Shipping get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shipping newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shipping[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shipping|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipping|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipping patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shipping[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shipping findOrCreate($search, callable $callback = null, $options = [])
 */
class ShippingTable extends Table
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

        $this->setTable('shipping');
        $this->setDisplayField('shipId');
        $this->setPrimaryKey('shipId');
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
            ->integer('shipId')
            ->allowEmpty('shipId', 'create');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmpty('status');

        $validator
            ->scalar('ship_date')
            ->maxLength('ship_date', 255)
            ->allowEmpty('ship_date');

        $validator
            ->scalar('ship_method')
            ->maxLength('ship_method', 255)
            ->allowEmpty('ship_method');

        $validator
            ->integer('userId')
            ->allowEmpty('userId');

        $validator
            ->integer('orderId')
            ->allowEmpty('orderId');

        return $validator;
    }
}
