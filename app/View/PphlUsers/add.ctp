<div class="pphlUsers form">
<?php echo $this->Form->create('PphlUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Pphl User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('hits');
		echo $this->Form->input('admin');
		echo $this->Form->input('pw');
		echo $this->Form->input('email');
		echo $this->Form->input('visible');
		echo $this->Form->input('timeout');
		echo $this->Form->input('timeout_onl');
		echo $this->Form->input('date_start');
		echo $this->Form->input('last_access');
		echo $this->Form->input('access_diff');
		echo $this->Form->input('hit_mail');
		echo $this->Form->input('loglim');
		echo $this->Form->input('stats_cache');
		echo $this->Form->input('your_url');
		echo $this->Form->input('ipblock');
		echo $this->Form->input('refblock');
		echo $this->Form->input('ownref');
		echo $this->Form->input('qstr');
		echo $this->Form->input('index_files');
		echo $this->Form->input('demo');
		echo $this->Form->input('flags');
		echo $this->Form->input('dlunite');
		echo $this->Form->input('ttf_file');
		echo $this->Form->input('gd_font');
		echo $this->Form->input('ttf_size');
		echo $this->Form->input('bg_c');
		echo $this->Form->input('fg_c');
		echo $this->Form->input('bg_trans');
		echo $this->Form->input('cssid');
		echo $this->Form->input('gmt');
		echo $this->Form->input('lang');
		echo $this->Form->input('conf');
		echo $this->Form->input('del_usr');
		echo $this->Form->input('limh');
		echo $this->Form->input('limh_p');
		echo $this->Form->input('limd');
		echo $this->Form->input('limd_p');
		echo $this->Form->input('kwspl');
		echo $this->Form->input('tblsize');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pphl Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
