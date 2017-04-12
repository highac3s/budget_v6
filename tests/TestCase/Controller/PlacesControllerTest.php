<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PlacesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PlacesController Test Case
 */
class PlacesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.places',
        'app.clients',
        'app.categories',
        'app.accounts',
        'app.forecasts',
        'app.users',
        'app.transactions',
        'app.payment_methods',
        'app.taxes',
        'app.trans_types'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
