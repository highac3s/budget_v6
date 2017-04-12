<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->id_account]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->id_account], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id_account)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forecasts'), ['controller' => 'Forecasts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forecast'), ['controller' => 'Forecasts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $account->has('category') ? $this->Html->link($account->category->name, ['controller' => 'Categories', 'action' => 'view', $account->category->id_category]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Account') ?></th>
            <td><?= $this->Number->format($account->id_account) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fixed Variable') ?></th>
            <td><?= $account->fixed_variable ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal Group') ?></th>
            <td><?= $account->personal_group ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($account->name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Forecasts') ?></h4>
        <?php if (!empty($account->forecasts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Forecast') ?></th>
                <th scope="col"><?= __('Month Amount 01') ?></th>
                <th scope="col"><?= __('Month Amount 02') ?></th>
                <th scope="col"><?= __('Month Amount 03') ?></th>
                <th scope="col"><?= __('Month Amount 04') ?></th>
                <th scope="col"><?= __('Month Amount 05') ?></th>
                <th scope="col"><?= __('Month Amount 06') ?></th>
                <th scope="col"><?= __('Month Amount 07') ?></th>
                <th scope="col"><?= __('Month Amount 08') ?></th>
                <th scope="col"><?= __('Month Amount 09') ?></th>
                <th scope="col"><?= __('Month Amount 10') ?></th>
                <th scope="col"><?= __('Month Amount 11') ?></th>
                <th scope="col"><?= __('Month Amount 12') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->forecasts as $forecasts): ?>
            <tr>
                <td><?= h($forecasts->id_forecast) ?></td>
                <td><?= h($forecasts->month_amount_01) ?></td>
                <td><?= h($forecasts->month_amount_02) ?></td>
                <td><?= h($forecasts->month_amount_03) ?></td>
                <td><?= h($forecasts->month_amount_04) ?></td>
                <td><?= h($forecasts->month_amount_05) ?></td>
                <td><?= h($forecasts->month_amount_06) ?></td>
                <td><?= h($forecasts->month_amount_07) ?></td>
                <td><?= h($forecasts->month_amount_08) ?></td>
                <td><?= h($forecasts->month_amount_09) ?></td>
                <td><?= h($forecasts->month_amount_10) ?></td>
                <td><?= h($forecasts->month_amount_11) ?></td>
                <td><?= h($forecasts->month_amount_12) ?></td>
                <td><?= h($forecasts->user_id) ?></td>
                <td><?= h($forecasts->account_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Forecasts', 'action' => 'view', $forecasts->id_forecast]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Forecasts', 'action' => 'edit', $forecasts->id_forecast]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Forecasts', 'action' => 'delete', $forecasts->id_forecast], ['confirm' => __('Are you sure you want to delete # {0}?', $forecasts->id_forecast)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($account->transactions)): ?>
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
            <?php foreach ($account->transactions as $transactions): ?>
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
