<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail[]|\Cake\Collection\CollectionInterface $orderdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderdetail index large-9 medium-8 columns content">
    <h3><?= __('Orderdetail') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('orDeId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tt_price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderdetail as $orderdetail): ?>
            <tr>
                <td><?= $this->Number->format($orderdetail->orDeId) ?></td>
                <td><?= $this->Number->format($orderdetail->procId) ?></td>
                <td><?= $this->Number->format($orderdetail->qty) ?></td>
                <td><?= $this->Number->format($orderdetail->tt_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderdetail->orDeId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderdetail->orDeId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderdetail->orDeId], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->orDeId)]) ?>
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
