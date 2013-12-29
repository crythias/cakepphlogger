<div class="pphlUsers index">
	<h2><?php echo __('Pphl Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('hits'); ?></th>
			<th><?php echo $this->Paginator->sort('admin'); ?></th>
			<th><?php echo $this->Paginator->sort('pw'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('timeout'); ?></th>
			<th><?php echo $this->Paginator->sort('timeout_onl'); ?></th>
			<th><?php echo $this->Paginator->sort('date_start'); ?></th>
			<th><?php echo $this->Paginator->sort('last_access'); ?></th>
			<th><?php echo $this->Paginator->sort('access_diff'); ?></th>
			<th><?php echo $this->Paginator->sort('hit_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('loglim'); ?></th>
			<th><?php echo $this->Paginator->sort('stats_cache'); ?></th>
			<th><?php echo $this->Paginator->sort('your_url'); ?></th>
			<th><?php echo $this->Paginator->sort('ipblock'); ?></th>
			<th><?php echo $this->Paginator->sort('refblock'); ?></th>
			<th><?php echo $this->Paginator->sort('ownref'); ?></th>
			<th><?php echo $this->Paginator->sort('qstr'); ?></th>
			<th><?php echo $this->Paginator->sort('index_files'); ?></th>
			<th><?php echo $this->Paginator->sort('demo'); ?></th>
			<th><?php echo $this->Paginator->sort('flags'); ?></th>
			<th><?php echo $this->Paginator->sort('dlunite'); ?></th>
			<th><?php echo $this->Paginator->sort('ttf_file'); ?></th>
			<th><?php echo $this->Paginator->sort('gd_font'); ?></th>
			<th><?php echo $this->Paginator->sort('ttf_size'); ?></th>
			<th><?php echo $this->Paginator->sort('bg_c'); ?></th>
			<th><?php echo $this->Paginator->sort('fg_c'); ?></th>
			<th><?php echo $this->Paginator->sort('bg_trans'); ?></th>
			<th><?php echo $this->Paginator->sort('cssid'); ?></th>
			<th><?php echo $this->Paginator->sort('gmt'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('conf'); ?></th>
			<th><?php echo $this->Paginator->sort('del_usr'); ?></th>
			<th><?php echo $this->Paginator->sort('limh'); ?></th>
			<th><?php echo $this->Paginator->sort('limh_p'); ?></th>
			<th><?php echo $this->Paginator->sort('limd'); ?></th>
			<th><?php echo $this->Paginator->sort('limd_p'); ?></th>
			<th><?php echo $this->Paginator->sort('kwspl'); ?></th>
			<th><?php echo $this->Paginator->sort('tblsize'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pphlUsers as $pphlUser): ?>
	<tr>
		<td><?php echo h($pphlUser['PphlUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['username']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['hits']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['admin']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['pw']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['email']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['visible']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['timeout']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['timeout_onl']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['date_start']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['last_access']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['access_diff']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['hit_mail']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['loglim']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['stats_cache']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['your_url']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['ipblock']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['refblock']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['ownref']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['qstr']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['index_files']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['demo']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['flags']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['dlunite']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['ttf_file']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['gd_font']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['ttf_size']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['bg_c']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['fg_c']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['bg_trans']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['cssid']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['gmt']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['lang']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['conf']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['del_usr']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['limh']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['limh_p']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['limd']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['limd_p']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['kwspl']); ?>&nbsp;</td>
		<td><?php echo h($pphlUser['PphlUser']['tblsize']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pphlUser['PphlUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pphlUser['PphlUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pphlUser['PphlUser']['id']), null, __('Are you sure you want to delete # %s?', $pphlUser['PphlUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pphl User'), array('action' => 'add')); ?></li>
	</ul>
</div>
