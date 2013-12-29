<div class="pphlAgents index">
	<h2><?php echo __('Pphl Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('agent'); ?></th>
			<th><?php echo $this->Paginator->sort('browser'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('version_st'); ?></th>
			<th><?php echo $this->Paginator->sort('system'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pphlAgents as $pphlAgent): ?>
	<tr>
		<td><?php echo h($pphlAgent['PphlAgent']['id']); ?>&nbsp;</td>
		<td><?php echo h($pphlAgent['PphlAgent']['agent']); ?>&nbsp;</td>
		<td><?php echo h($pphlAgent['PphlAgent']['browser']); ?>&nbsp;</td>
		<td><?php echo h($pphlAgent['PphlAgent']['version']); ?>&nbsp;</td>
		<td><?php echo h($pphlAgent['PphlAgent']['version_st']); ?>&nbsp;</td>
		<td><?php echo h($pphlAgent['PphlAgent']['system']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pphlAgent['PphlAgent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pphlAgent['PphlAgent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pphlAgent['PphlAgent']['id']), null, __('Are you sure you want to delete # %s?', $pphlAgent['PphlAgent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pphl Agent'), array('action' => 'add')); ?></li>
	</ul>
</div>
