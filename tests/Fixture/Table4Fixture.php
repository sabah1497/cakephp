<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Table4Fixture
 */
class Table4Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'table4';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'Substances' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'RelatedInformation' => ['type' => 'string', 'length' => 376, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
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
                'Substances' => 'Lorem ',
                'RelatedInformation' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
