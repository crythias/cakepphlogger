<div class="pphlSettings form">
<?php echo $this->Form->create('PphlSetting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pphl Setting'); ?></legend>
	<?php
		echo $this->Form->input('setting');
		echo $this->Form->input('value');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PphlSetting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PphlSetting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pphl Settings'), array('action' => 'index')); ?></li>
	</ul>
</div>
