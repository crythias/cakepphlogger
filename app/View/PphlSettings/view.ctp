<div class="pphlSettings view">
<h2><?php echo __('Pphl Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Setting'); ?></dt>
		<dd>
			<?php echo h($pphlSetting['PphlSetting']['setting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($pphlSetting['PphlSetting']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($pphlSetting['PphlSetting']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pphl Setting'), array('action' => 'edit', $pphlSetting['PphlSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pphl Setting'), array('action' => 'delete', $pphlSetting['PphlSetting']['id']), null, __('Are you sure you want to delete # %s?', $pphlSetting['PphlSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pphl Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pphl Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
