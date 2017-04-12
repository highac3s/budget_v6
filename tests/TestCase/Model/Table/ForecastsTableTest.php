<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ForecastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ForecastsTable Test Case
 */
class ForecastsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ForecastsTable
     */
    public $Forecasts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.forecasts',
        'app.users',
        'app.accounts',
        'app.categories',
        'app.clients',
        'app.payment_methods',
        'app.places',
        'app.taxes',
        'app.trans_types',
        'app.transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Forecasts') ? [] : ['className' => 'App\Model\Table\ForecastsTable'];
        $this->Forecasts = TableRegistry::get('Forecasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Forecasts);

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
