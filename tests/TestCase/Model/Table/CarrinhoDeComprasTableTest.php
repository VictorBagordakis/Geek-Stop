<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrinhoDeComprasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrinhoDeComprasTable Test Case
 */
class CarrinhoDeComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrinhoDeComprasTable
     */
    protected $CarrinhoDeCompras;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CarrinhoDeCompras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CarrinhoDeCompras') ? [] : ['className' => CarrinhoDeComprasTable::class];
        $this->CarrinhoDeCompras = $this->getTableLocator()->get('CarrinhoDeCompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CarrinhoDeCompras);

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
