<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Table22Fixture
 */
class Table22Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'table22';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'Substance ID' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'EC number' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'CAS number' => ['type' => 'string', 'length' => 21, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Substance name' => ['type' => 'string', 'length' => 174, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
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
                'Substance ID' => 'Lorem ',
                'EC number' => 'Lorem ipsum dolor ',
                'CAS number' => 'Lorem ipsum dolor s',
                'Substance name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
