<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipping $shipping
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shipping'), ['action' => 'edit', $shipping->shipId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipping'), ['action' => 'delete', $shipping->shipId], ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->shipId)]) ?> </li>
        <li><?= $this->Html->link(__('List Shipping'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shipping view large-9 medium-8 columns content">
    <h3><?= h($shipping->shipId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($shipping->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ship Date') ?></th>
            <td><?= h($shipping->ship_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ship Method') ?></th>
            <td><?= h($shipping->ship_method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ShipId') ?></th>
            <td><?= $this->Number->format($shipping->shipId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($shipping->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderId') ?></th>
            <td><?= $this->Number->format($shipping->orderId) ?></td>
        </tr>
    </table>
</div>
