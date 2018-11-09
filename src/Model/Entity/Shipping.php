<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shipping Entity
 *
 * @property int $shipId
 * @property string $status
 * @property string $ship_date
 * @property string $ship_method
 * @property int $userId
 * @property int $orderId
 */
class Shipping extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'status' => true,
        'ship_date' => true,
        'ship_method' => true,
        'userId' => true,
        'orderId' => true
    ];
}
