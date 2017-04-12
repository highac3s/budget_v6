<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id_transaction
 * @property bool $applicable_tax
 * @property string $name
 * @property float $amount
 * @property \Cake\I18n\Time $date
 * @property int $trans_type_id
 * @property int $buyer_id
 * @property int $recipient_id
 * @property int $payment_method_id
 * @property int $account_id
 * @property int $place_id
 *
 * @property \App\Model\Entity\TransType $trans_type
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\PaymentMethod $payment_method
 * @property \App\Model\Entity\Account $account
 * @property \App\Model\Entity\Place $place
 */
class Transaction extends Entity
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
        'id_transaction' => false
    ];
}
