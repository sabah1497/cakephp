<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Table22;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Table22 Test Case
 */
class Table22Test extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Table22
     */
    protected $Table22;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('22') ? [] : ['className' => Table22::class];
        $this->Table22 = $this->getTableLocator()->get('22', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Table22);

        parent::tearDown();
    }
}
