<div class="pphlAgents form">
<?php echo $this->Form->create('PphlAgent'); ?>
	<fieldset>
		<legend><?php echo __('Add Pphl Agent'); ?></legend>
	<?php
		echo $this->Form->input('agent');
		echo $this->Form->input('browser');
		echo $this->Form->input('version');
		echo $this->Form->input('version_st');
		echo $this->Form->input('system');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pphl Agents'), array('action' => 'index')); ?></li>
	</ul>
</div>
