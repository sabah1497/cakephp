<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Table3;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Table3 Test Case
 */
class Table3Test extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Table3
     */
    protected $Table3;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('3') ? [] : ['className' => Table3::class];
        $this->Table3 = $this->getTableLocator()->get('3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Table3);

        parent::tearDown();
    }
}
