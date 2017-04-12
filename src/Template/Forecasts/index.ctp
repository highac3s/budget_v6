<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Forecast'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="forecasts index large-9 medium-8 columns content">
    <h3><?= __('Forecasts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_forecast') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_01') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_02') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_03') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_04') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_05') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_06') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_07') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_08') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_09') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_10') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_11') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_amount_12') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forecasts as $forecast): ?>
            <tr>
                <td><?= $this->Number->format($forecast->id_forecast) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_01) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_02) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_03) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_04) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_05) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_06) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_07) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_08) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_09) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_10) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_11) ?></td>
                <td><?= $this->Number->format($forecast->month_amount_12) ?></td>
                <td><?= $forecast->has('user') ? $this->Html->link($forecast->user->name, ['controller' => 'Users', 'action' => 'view', $forecast->user->id_user]) : '' ?></td>
                <td><?= $forecast->has('account') ? $this->Html->link($forecast->account->name, ['controller' => 'Accounts', 'action' => 'view', $forecast->account->id_account]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $forecast->id_forecast]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $forecast->id_forecast]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $forecast->id_forecast], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id_forecast)]) ?>
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
