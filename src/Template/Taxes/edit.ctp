<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tax->id_taxes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tax->id_taxes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Taxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxes form large-9 medium-8 columns content">
    <?= $this->Form->create($tax) ?>
    <fieldset>
        <legend><?= __('Edit Tax') ?></legend>
        <?php
            echo $this->Form->control('province_date');
            echo $this->Form->control('province_value');
            echo $this->Form->control('federal_date');
            echo $this->Form->control('federal_value');
            echo $this->Form->control('client_id', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
