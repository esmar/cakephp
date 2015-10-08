<?php
namespace App\Model\Table;

use App\Model\Entity\Correo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Correos Model
 *
 */
class CorreosTable extends Table
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

        $this->table('correos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('destinario', 'create')
            ->notEmpty('destinario');

        $validator
            ->requirePresence('asunto', 'create')
            ->notEmpty('asunto');

        $validator
            ->requirePresence('mensaje', 'create')
            ->notEmpty('mensaje');

        $validator
            ->add('id_user', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        return $validator;
    }
}
