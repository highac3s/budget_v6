<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tax Entity
 *
 * @property int $id_taxes
 * @property \Cake\I18n\Time $province_date
 * @property float $province_value
 * @property \Cake\I18n\Time $federal_date
 * @property float $federal_value
 * @property int $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class Tax extends Entity
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
        '*' => true,
        'id_taxes' => false
    ];
}
