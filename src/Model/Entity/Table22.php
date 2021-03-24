<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Table22 Entity
 *
 * @property string|null $Substance ID
 * @property string|null $EC number
 * @property string|null $CAS number
 * @property string|null $Substance name
 */
class Table22 extends Entity
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
        'Substance ID' => true,
        'EC number' => true,
        'CAS number' => true,
        'Substance name' => true,
    ];
}
