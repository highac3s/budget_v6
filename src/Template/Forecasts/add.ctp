<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Forecasts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="forecasts form large-9 medium-8 columns content">
    <?= $this->Form->create($forecast) ?>
    <fieldset>
        <legend><?= __('Add Forecast') ?></legend>
        <?php
            echo $this->Form->control('month_amount_01');
            echo $this->Form->control('month_amount_02');
            echo $this->Form->control('month_amount_03');
            echo $this->Form->control('month_amount_04');
            echo $this->Form->control('month_amount_05');
            echo $this->Form->control('month_amount_06');
            echo $this->Form->control('month_amount_07');
            echo $this->Form->control('month_amount_08');
            echo $this->Form->control('month_amount_09');
            echo $this->Form->control('month_amount_10');
            echo $this->Form->control('month_amount_11');
            echo $this->Form->control('month_amount_12');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('account_id', ['options' => $accounts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
