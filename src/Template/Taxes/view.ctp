<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tax'), ['action' => 'edit', $tax->id_taxes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tax'), ['action' => 'delete', $tax->id_taxes], ['confirm' => __('Are you sure you want to delete # {0}?', $tax->id_taxes)]) ?> </li>
        <li><?= $this->Html->link(__('List Taxes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="taxes view large-9 medium-8 columns content">
    <h3><?= h($tax->id_taxes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $tax->has('client') ? $this->Html->link($tax->client->name, ['controller' => 'Clients', 'action' => 'view', $tax->client->id_client]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Taxes') ?></th>
            <td><?= $this->Number->format($tax->id_taxes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Value') ?></th>
            <td><?= $this->Number->format($tax->province_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Federal Value') ?></th>
            <td><?= $this->Number->format($tax->federal_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Date') ?></th>
            <td><?= h($tax->province_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Federal Date') ?></th>
            <td><?= h($tax->federal_date) ?></td>
        </tr>
    </table>
</div>
