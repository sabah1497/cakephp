<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Table2Fixture
 */
class Table2Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'table2';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'SubstanceID' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ECnumber' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'CASnumber' => ['type' => 'string', 'length' => 21, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Substancename' => ['type' => 'string', 'length' => 174, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'SubstanceID' => 'Lorem ',
                'ECnumber' => 'Lorem ipsum dolor ',
                'CASnumber' => 'Lorem ipsum dolor s',
                'Substancename' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
