<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaxesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaxesTable Test Case
 */
class TaxesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaxesTable
     */
    public $Taxes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.taxes',
        'app.clients',
        'app.categories',
        'app.accounts',
        'app.forecasts',
        'app.users',
        'app.transactions',
        'app.payment_methods',
        'app.places',
        'app.trans_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Taxes') ? [] : ['className' => 'App\Model\Table\TaxesTable'];
        $this->Taxes = TableRegistry::get('Taxes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Taxes);

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
