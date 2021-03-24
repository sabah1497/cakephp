<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Table4;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Table4 Test Case
 */
class Table4Test extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Table4
     */
    protected $Table4;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('4') ? [] : ['className' => Table4::class];
        $this->Table4 = $this->getTableLocator()->get('4', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Table4);

        parent::tearDown();
    }
}
