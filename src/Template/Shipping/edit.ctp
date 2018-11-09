<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipping $shipping
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shipping->shipId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->shipId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shipping'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shipping form large-9 medium-8 columns content">
    <?= $this->Form->create($shipping) ?>
    <fieldset>
        <legend><?= __('Edit Shipping') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('ship_date');
            echo $this->Form->control('ship_method');
            echo $this->Form->control('userId');
            echo $this->Form->control('orderId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
