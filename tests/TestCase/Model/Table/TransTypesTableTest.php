<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransTypesTable Test Case
 */
class TransTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransTypesTable
     */
    public $TransTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trans_types',
        'app.clients',
        'app.categories',
        'app.accounts',
        'app.forecasts',
        'app.users',
        'app.transactions',
        'app.payment_methods',
        'app.places',
        'app.taxes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TransTypes') ? [] : ['className' => 'App\Model\Table\TransTypesTable'];
        $this->TransTypes = TableRegistry::get('TransTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
