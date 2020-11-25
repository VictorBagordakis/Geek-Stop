<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CamisetasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CamisetasTable Test Case
 */
class CamisetasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CamisetasTable
     */
    protected $Camisetas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Camisetas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Camisetas') ? [] : ['className' => CamisetasTable::class];
        $this->Camisetas = $this->getTableLocator()->get('Camisetas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Camisetas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
