<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="histories index large-9 medium-8 columns content">
    <h3><?= __('Histories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($histories as $history): ?>
            <tr>
                <td><?= $this->Number->format($history->id) ?></td>
                <td><?= $history->has('user') ? $this->Html->link($history->user->id, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
                <td><?= h($history->created) ?></td>
                <td><?= h($history->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Histories', 'action' => 'view', $history->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Histories', 'action' => 'edit', $history->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Histories', 'action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
