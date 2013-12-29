<div class="pphlAgents view">
<h2><?php echo __('Pphl Agent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Browser'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['browser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version St'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['version_st']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('System'); ?></dt>
		<dd>
			<?php echo h($pphlAgent['PphlAgent']['system']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pphl Agent'), array('action' => 'edit', $pphlAgent['PphlAgent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pphl Agent'), array('action' => 'delete', $pphlAgent['PphlAgent']['id']), null, __('Are you sure you want to delete # %s?', $pphlAgent['PphlAgent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pphl Agents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pphl Agent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
