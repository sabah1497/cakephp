<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Table2;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Table22 Test Case
 */
class Table2Test extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Table2
     */
    protected $Table2;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('2') ? [] : ['className' => Table2::class];
        $this->Table2 = $this->getTableLocator()->get('2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Table2);

        parent::tearDown();
    }
}
