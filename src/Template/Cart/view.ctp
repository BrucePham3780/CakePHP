<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cart'), ['action' => 'edit', $cart->cartId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cart'), ['action' => 'delete', $cart->cartId], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->cartId)]) ?> </li>
        <li><?= $this->Html->link(__('List Cart'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cart'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cart view large-9 medium-8 columns content">
    <h3><?= h($cart->cartId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CartId') ?></th>
            <td><?= $this->Number->format($cart->cartId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProcId') ?></th>
            <td><?= $this->Number->format($cart->procId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($cart->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($cart->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tt Price') ?></th>
            <td><?= $this->Number->format($cart->tt_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cart->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cart->modified) ?></td>
        </tr>
    </table>
</div>
