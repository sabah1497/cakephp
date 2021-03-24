<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\YordasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\YordasTable Test Case
 */
class YordasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\YordasTable
     */
    protected $Yordas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Yordas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Yordas') ? [] : ['className' => YordasTable::class];
        $this->Yordas = $this->getTableLocator()->get('Yordas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Yordas);

        parent::tearDown();
    }
}
