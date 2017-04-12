<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionsFixture
 *
 */
class TransactionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_transaction' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'applicable_tax' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null],
        'amount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'trans_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'buyer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recipient_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'payment_method_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'account_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'place_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK' => ['type' => 'index', 'columns' => ['buyer_id', 'trans_type_id', 'recipient_id', 'payment_method_id', 'account_id', 'place_id'], 'length' => []],
            'ct_transaction_tp' => ['type' => 'index', 'columns' => ['trans_type_id'], 'length' => []],
            'ct_transaction_recipient' => ['type' => 'index', 'columns' => ['recipient_id'], 'length' => []],
            'ct_transaction_pm' => ['type' => 'index', 'columns' => ['payment_method_id'], 'length' => []],
            'ct_transaction_account' => ['type' => 'index', 'columns' => ['account_id'], 'length' => []],
            'ct_transaction_place' => ['type' => 'index', 'columns' => ['place_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_transaction'], 'length' => []],
            'ct_transaction_account' => ['type' => 'foreign', 'columns' => ['account_id'], 'references' => ['accounts', 'id_account'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ct_transaction_buyer' => ['type' => 'foreign', 'columns' => ['buyer_id'], 'references' => ['users', 'id_user'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ct_transaction_place' => ['type' => 'foreign', 'columns' => ['place_id'], 'references' => ['places', 'id_places'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ct_transaction_pm' => ['type' => 'foreign', 'columns' => ['payment_method_id'], 'references' => ['payment_methods', 'id_payment_methods'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ct_transaction_recipient' => ['type' => 'foreign', 'columns' => ['recipient_id'], 'references' => ['users', 'id_user'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ct_transaction_tp' => ['type' => 'foreign', 'columns' => ['trans_type_id'], 'references' => ['trans_types', 'id_trans_type'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_520_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_transaction' => 1,
            'applicable_tax' => 1,
            'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'amount' => 1,
            'date' => '2017-04-07',
            'trans_type_id' => 1,
            'buyer_id' => 1,
            'recipient_id' => 1,
            'payment_method_id' => 1,
            'account_id' => 1,
            'place_id' => 1
        ],
    ];
}
