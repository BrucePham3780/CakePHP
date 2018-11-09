<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->orderId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->orderId], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orderId)]) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="order view large-9 medium-8 columns content">
    <h3><?= h($order->orderId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderId') ?></th>
            <td><?= $this->Number->format($order->orderId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($order->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrDeId') ?></th>
            <td><?= $this->Number->format($order->orDeId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tt Price') ?></th>
            <td><?= $this->Number->format($order->tt_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
</div>
