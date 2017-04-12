<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id_category]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id_category], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id_category)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $category->has('client') ? $this->Html->link($category->client->name, ['controller' => 'Clients', 'action' => 'view', $category->client->id_client]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Category') ?></th>
            <td><?= $this->Number->format($category->id_category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expense Income') ?></th>
            <td><?= $category->expense_income ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($category->name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($category->accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Account') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Fixed Variable') ?></th>
                <th scope="col"><?= __('Personal Group') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->accounts as $accounts): ?>
            <tr>
                <td><?= h($accounts->id_account) ?></td>
                <td><?= h($accounts->name) ?></td>
                <td><?= h($accounts->fixed_variable) ?></td>
                <td><?= h($accounts->personal_group) ?></td>
                <td><?= h($accounts->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->id_account]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->id_account]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->id_account], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->id_account)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
