<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersprodutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersprodutosTable Test Case
 */
class UsersprodutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersprodutosTable
     */
    protected $Usersprodutos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Usersprodutos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usersprodutos') ? [] : ['className' => UsersprodutosTable::class];
        $this->Usersprodutos = $this->getTableLocator()->get('Usersprodutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Usersprodutos);

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
