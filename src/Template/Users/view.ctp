<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id_user]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_user)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forecasts'), ['controller' => 'Forecasts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forecast'), ['controller' => 'Forecasts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($user->id_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentage') ?></th>
            <td><?= $this->Number->format($user->percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owes To') ?></th>
            <td><?= $this->Number->format($user->owes_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $user->admin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Username') ?></h4>
        <?= $this->Text->autoParagraph(h($user->username)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($user->password)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Children') ?></h4>
        <?php if (!empty($user->children)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Child') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->children as $children): ?>
            <tr>
                <td><?= h($children->id_child) ?></td>
                <td><?= h($children->name) ?></td>
                <td><?= h($children->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Children', 'action' => 'view', $children->id_child]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Children', 'action' => 'edit', $children->id_child]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Children', 'action' => 'delete', $children->id_child], ['confirm' => __('Are you sure you want to delete # {0}?', $children->id_child)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Forecasts') ?></h4>
        <?php if (!empty($user->forecasts)): ?>
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
            <?php foreach ($user->forecasts as $forecasts): ?>
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
</div>
