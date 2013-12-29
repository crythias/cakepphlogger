<div class="pphlDomains view">
<h2><?php echo __('Pphl Domain'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pphlDomain['PphlDomain']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tld'); ?></dt>
		<dd>
			<?php echo h($pphlDomain['PphlDomain']['tld']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($pphlDomain['PphlDomain']['area']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pphl Domain'), array('action' => 'edit', $pphlDomain['PphlDomain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pphl Domain'), array('action' => 'delete', $pphlDomain['PphlDomain']['id']), null, __('Are you sure you want to delete # %s?', $pphlDomain['PphlDomain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pphl Domains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pphl Domain'), array('action' => 'add')); ?> </li>
	</ul>
</div>
