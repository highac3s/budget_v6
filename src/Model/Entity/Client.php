<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id_client
 * @property string $name
 * @property string $address
 * @property int $buyer_nb
 *
 * @property \App\Model\Entity\Category[] $categories
 * @property \App\Model\Entity\PaymentMethod[] $payment_methods
 * @property \App\Model\Entity\Place[] $places
 * @property \App\Model\Entity\Tax[] $taxes
 * @property \App\Model\Entity\TransType[] $trans_types
 */
class Client extends Entity
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
        'id_client' => false
    ];
}
