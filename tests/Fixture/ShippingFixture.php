<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShippingFixture
 *
 */
class ShippingFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'shipping';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'shipId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'status' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ship_date' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ship_method' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'userId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'orderId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'userId' => ['type' => 'index', 'columns' => ['userId'], 'length' => []],
            'orderId' => ['type' => 'index', 'columns' => ['orderId'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['shipId'], 'length' => []],
            'shipping_ibfk_1' => ['type' => 'foreign', 'columns' => ['userId'], 'references' => ['users', 'userId'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'shipping_ibfk_2' => ['type' => 'foreign', 'columns' => ['orderId'], 'references' => ['order', 'orderId'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'shipId' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'ship_date' => 'Lorem ipsum dolor sit amet',
                'ship_method' => 'Lorem ipsum dolor sit amet',
                'userId' => 1,
                'orderId' => 1
            ],
        ];
        parent::init();
    }
}
