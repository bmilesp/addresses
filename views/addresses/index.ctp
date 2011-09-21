<div class="addresses index">
	<h2><?php __('Addresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('addr_1');?></th>
			<th><?php echo $this->Paginator->sort('addr_2');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($addresses as $address):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $address['Address']['id']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['addr_1']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['addr_2']; ?>&nbsp;</td>
		<td><?php echo $address['Address']['city']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($address['State']['name'], array('controller' => 'states', 'action' => 'view', $address['State']['id'])); ?>
		</td>
		<td><?php echo $address['Address']['zip']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($address['Country']['name'], array('controller' => 'countries', 'action' => 'view', $address['Country']['id'])); ?>
		</td>
		<td><?php echo $address['Address']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $address['Address']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $address['Address']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $address['Address']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $address['Address']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Address', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States', true), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State', true), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>