<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id_client]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id_client], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id_client)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payment Methods'), ['controller' => 'PaymentMethods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Method'), ['controller' => 'PaymentMethods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Taxes'), ['controller' => 'Taxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax'), ['controller' => 'Taxes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trans Types'), ['controller' => 'TransTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trans Type'), ['controller' => 'TransTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Client') ?></th>
            <td><?= $this->Number->format($client->id_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buyer Nb') ?></th>
            <td><?= $this->Number->format($client->buyer_nb) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($client->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($client->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($client->categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Category') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Expense Income') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id_category) ?></td>
                <td><?= h($categories->name) ?></td>
                <td><?= h($categories->expense_income) ?></td>
                <td><?= h($categories->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id_category]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id_category]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id_category], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id_category)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payment Methods') ?></h4>
        <?php if (!empty($client->payment_methods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Payment Methods') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Sort') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->payment_methods as $paymentMethods): ?>
            <tr>
                <td><?= h($paymentMethods->id_payment_methods) ?></td>
                <td><?= h($paymentMethods->name) ?></td>
                <td><?= h($paymentMethods->type) ?></td>
                <td><?= h($paymentMethods->sort) ?></td>
                <td><?= h($paymentMethods->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PaymentMethods', 'action' => 'view', $paymentMethods->id_payment_methods]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PaymentMethods', 'action' => 'edit', $paymentMethods->id_payment_methods]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PaymentMethods', 'action' => 'delete', $paymentMethods->id_payment_methods], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentMethods->id_payment_methods)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Places') ?></h4>
        <?php if (!empty($client->places)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Places') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Extension') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cellphone') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->places as $places): ?>
            <tr>
                <td><?= h($places->id_places) ?></td>
                <td><?= h($places->name) ?></td>
                <td><?= h($places->phone) ?></td>
                <td><?= h($places->extension) ?></td>
                <td><?= h($places->email) ?></td>
                <td><?= h($places->cellphone) ?></td>
                <td><?= h($places->website) ?></td>
                <td><?= h($places->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Places', 'action' => 'view', $places->id_places]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Places', 'action' => 'edit', $places->id_places]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Places', 'action' => 'delete', $places->id_places], ['confirm' => __('Are you sure you want to delete # {0}?', $places->id_places)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Taxes') ?></h4>
        <?php if (!empty($client->taxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Taxes') ?></th>
                <th scope="col"><?= __('Province Date') ?></th>
                <th scope="col"><?= __('Province Value') ?></th>
                <th scope="col"><?= __('Federal Date') ?></th>
                <th scope="col"><?= __('Federal Value') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->taxes as $taxes): ?>
            <tr>
                <td><?= h($taxes->id_taxes) ?></td>
                <td><?= h($taxes->province_date) ?></td>
                <td><?= h($taxes->province_value) ?></td>
                <td><?= h($taxes->federal_date) ?></td>
                <td><?= h($taxes->federal_value) ?></td>
                <td><?= h($taxes->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Taxes', 'action' => 'view', $taxes->id_taxes]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Taxes', 'action' => 'edit', $taxes->id_taxes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Taxes', 'action' => 'delete', $taxes->id_taxes], ['confirm' => __('Are you sure you want to delete # {0}?', $taxes->id_taxes)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Trans Types') ?></h4>
        <?php if (!empty($client->trans_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Trans Type') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->trans_types as $transTypes): ?>
            <tr>
                <td><?= h($transTypes->id_trans_type) ?></td>
                <td><?= h($transTypes->name) ?></td>
                <td><?= h($transTypes->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TransTypes', 'action' => 'view', $transTypes->id_trans_type]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TransTypes', 'action' => 'edit', $transTypes->id_trans_type]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TransTypes', 'action' => 'delete', $transTypes->id_trans_type], ['confirm' => __('Are you sure you want to delete # {0}?', $transTypes->id_trans_type)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
