<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id_transaction]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id_transaction], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id_transaction)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trans Types'), ['controller' => 'TransTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trans Type'), ['controller' => 'TransTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payment Methods'), ['controller' => 'PaymentMethods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Method'), ['controller' => 'PaymentMethods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactions view large-9 medium-8 columns content">
    <h3><?= h($transaction->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Trans Type') ?></th>
            <td><?= $transaction->has('trans_type') ? $this->Html->link($transaction->trans_type->name, ['controller' => 'TransTypes', 'action' => 'view', $transaction->trans_type->id_trans_type]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id_user]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Method') ?></th>
            <td><?= $transaction->has('payment_method') ? $this->Html->link($transaction->payment_method->name, ['controller' => 'PaymentMethods', 'action' => 'view', $transaction->payment_method->id_payment_methods]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $transaction->has('account') ? $this->Html->link($transaction->account->name, ['controller' => 'Accounts', 'action' => 'view', $transaction->account->id_account]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= $transaction->has('place') ? $this->Html->link($transaction->place->name, ['controller' => 'Places', 'action' => 'view', $transaction->place->id_places]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Transaction') ?></th>
            <td><?= $this->Number->format($transaction->id_transaction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($transaction->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buyer Id') ?></th>
            <td><?= $this->Number->format($transaction->buyer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($transaction->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Applicable Tax') ?></th>
            <td><?= $transaction->applicable_tax ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->name)); ?>
    </div>
</div>
