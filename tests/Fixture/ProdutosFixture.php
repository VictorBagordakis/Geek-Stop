<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'nome' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'quantidade' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => ''],
        'modified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => ''],
        'preço' => ['type' => 'decimal', 'length' => 3, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_unicode_ci'
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'quantidade' => 1,
                'created' => 1605542626,
                'modified' => 1605542626,
                'preço' => 1.5,
            ],
        ];
        parent::init();
    }
}
