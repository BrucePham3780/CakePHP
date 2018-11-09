<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $cart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cart'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cart index large-9 medium-8 columns content">
    <h3><?= __('Cart') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cartId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tt_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $cart): ?>
            <tr>
                <td><?= $this->Number->format($cart->cartId) ?></td>
                <td><?= $this->Number->format($cart->procId) ?></td>
                <td><?= $this->Number->format($cart->userId) ?></td>
                <td><?= $this->Number->format($cart->qty) ?></td>
                <td><?= $this->Number->format($cart->tt_price) ?></td>
                <td><?= h($cart->created) ?></td>
                <td><?= h($cart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cart->cartId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cart->cartId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cart->cartId], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->cartId)]) ?>
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
