<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Forecast Entity
 *
 * @property int $id_forecast
 * @property float $month_amount_01
 * @property float $month_amount_02
 * @property float $month_amount_03
 * @property float $month_amount_04
 * @property float $month_amount_05
 * @property float $month_amount_06
 * @property float $month_amount_07
 * @property float $month_amount_08
 * @property float $month_amount_09
 * @property float $month_amount_10
 * @property float $month_amount_11
 * @property float $month_amount_12
 * @property int $user_id
 * @property int $account_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Account $account
 */
class Forecast extends Entity
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
        'id_forecast' => false
    ];
}
