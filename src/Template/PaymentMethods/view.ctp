<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment Method'), ['action' => 'edit', $paymentMethod->id_payment_methods]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment Method'), ['action' => 'delete', $paymentMethod->id_payment_methods], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentMethod->id_payment_methods)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment Methods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Method'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentMethods view large-9 medium-8 columns content">
    <h3><?= h($paymentMethod->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $paymentMethod->has('client') ? $this->Html->link($paymentMethod->client->name, ['controller' => 'Clients', 'action' => 'view', $paymentMethod->client->id_client]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Payment Methods') ?></th>
            <td><?= $this->Number->format($paymentMethod->id_payment_methods) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort') ?></th>
            <td><?= $this->Number->format($paymentMethod->sort) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($paymentMethod->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($paymentMethod->type)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($paymentMethod->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Transaction') ?></th>
                <th scope="col"><?= __('Applicable Tax') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Trans Type Id') ?></th>
                <th scope="col"><?= __('Buyer Id') ?></th>
                <th scope="col"><?= __('Recipient Id') ?></th>
                <th scope="col"><?= __('Payment Method Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paymentMethod->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id_transaction) ?></td>
                <td><?= h($transactions->applicable_tax) ?></td>
                <td><?= h($transactions->name) ?></td>
                <td><?= h($transactions->amount) ?></td>
                <td><?= h($transactions->date) ?></td>
                <td><?= h($transactions->trans_type_id) ?></td>
                <td><?= h($transactions->buyer_id) ?></td>
                <td><?= h($transactions->recipient_id) ?></td>
                <td><?= h($transactions->payment_method_id) ?></td>
                <td><?= h($transactions->account_id) ?></td>
                <td><?= h($transactions->place_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id_transaction]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id_transaction]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id_transaction], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id_transaction)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
