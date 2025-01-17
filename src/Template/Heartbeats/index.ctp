<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Heartbeat'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="heartbeats index large-9 medium-8 columns content">
    <h3><?= __('Heartbeats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heartbeats as $heartbeat): ?>
            <tr>
                <td><?= $this->Number->format($heartbeat->id) ?></td>
                <td><?= $heartbeat->has('user') ? $this->Html->link($heartbeat->user->id, ['controller' => 'Users', 'action' => 'view', $heartbeat->user->id]) : '' ?></td>
                <td><?= $this->Number->format($heartbeat->value) ?></td>
                <td><?= h($heartbeat->created) ?></td>
                <td><?= h($heartbeat->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $heartbeat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $heartbeat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $heartbeat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $heartbeat->id)]) ?>
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
