<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forecast'), ['action' => 'edit', $forecast->id_forecast]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forecast'), ['action' => 'delete', $forecast->id_forecast], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id_forecast)]) ?> </li>
        <li><?= $this->Html->link(__('List Forecasts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forecast'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="forecasts view large-9 medium-8 columns content">
    <h3><?= h($forecast->id_forecast) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $forecast->has('user') ? $this->Html->link($forecast->user->name, ['controller' => 'Users', 'action' => 'view', $forecast->user->id_user]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $forecast->has('account') ? $this->Html->link($forecast->account->name, ['controller' => 'Accounts', 'action' => 'view', $forecast->account->id_account]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Forecast') ?></th>
            <td><?= $this->Number->format($forecast->id_forecast) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 01') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_01) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 02') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_02) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 03') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_03) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 04') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_04) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 05') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_05) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 06') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_06) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 07') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_07) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 08') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_08) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 09') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_09) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 10') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 11') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_11) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Amount 12') ?></th>
            <td><?= $this->Number->format($forecast->month_amount_12) ?></td>
        </tr>
    </table>
</div>
