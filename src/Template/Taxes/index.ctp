<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tax'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxes index large-9 medium-8 columns content">
    <h3><?= __('Taxes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_taxes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('federal_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('federal_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taxes as $tax): ?>
            <tr>
                <td><?= $this->Number->format($tax->id_taxes) ?></td>
                <td><?= h($tax->province_date) ?></td>
                <td><?= $this->Number->format($tax->province_value) ?></td>
                <td><?= h($tax->federal_date) ?></td>
                <td><?= $this->Number->format($tax->federal_value) ?></td>
                <td><?= $tax->has('client') ? $this->Html->link($tax->client->name, ['controller' => 'Clients', 'action' => 'view', $tax->client->id_client]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tax->id_taxes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tax->id_taxes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tax->id_taxes], ['confirm' => __('Are you sure you want to delete # {0}?', $tax->id_taxes)]) ?>
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
