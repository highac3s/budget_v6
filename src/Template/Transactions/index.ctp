<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trans Types'), ['controller' => 'TransTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trans Type'), ['controller' => 'TransTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payment Methods'), ['controller' => 'PaymentMethods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment Method'), ['controller' => 'PaymentMethods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_transaction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('applicable_tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trans_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buyer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recipient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_method_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $this->Number->format($transaction->id_transaction) ?></td>
                <td><?= h($transaction->applicable_tax) ?></td>
                <td><?= $this->Number->format($transaction->amount) ?></td>
                <td><?= h($transaction->date) ?></td>
                <td><?= $transaction->has('trans_type') ? $this->Html->link($transaction->trans_type->name, ['controller' => 'TransTypes', 'action' => 'view', $transaction->trans_type->id_trans_type]) : '' ?></td>
                <td><?= $this->Number->format($transaction->buyer_id) ?></td>
                <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id_user]) : '' ?></td>
                <td><?= $transaction->has('payment_method') ? $this->Html->link($transaction->payment_method->name, ['controller' => 'PaymentMethods', 'action' => 'view', $transaction->payment_method->id_payment_methods]) : '' ?></td>
                <td><?= $transaction->has('account') ? $this->Html->link($transaction->account->name, ['controller' => 'Accounts', 'action' => 'view', $transaction->account->id_account]) : '' ?></td>
                <td><?= $transaction->has('place') ? $this->Html->link($transaction->place->name, ['controller' => 'Places', 'action' => 'view', $transaction->place->id_places]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id_transaction]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id_transaction]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->id_transaction], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id_transaction)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
