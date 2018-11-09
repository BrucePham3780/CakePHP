<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cart->cartId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cart->cartId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cart'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cart form large-9 medium-8 columns content">
    <?= $this->Form->create($cart) ?>
    <fieldset>
        <legend><?= __('Edit Cart') ?></legend>
        <?php
            echo $this->Form->control('procId');
            echo $this->Form->control('userId');
            echo $this->Form->control('qty');
            echo $this->Form->control('tt_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
