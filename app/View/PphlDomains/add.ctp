<div class="pphlDomains form">
<?php echo $this->Form->create('PphlDomain'); ?>
	<fieldset>
		<legend><?php echo __('Add Pphl Domain'); ?></legend>
	<?php
		echo $this->Form->input('tld');
		echo $this->Form->input('area');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pphl Domains'), array('action' => 'index')); ?></li>
	</ul>
</div>
