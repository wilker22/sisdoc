<div class="municipios index">
	<h2><?php echo __('Municipios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<!--	<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($municipios as $municipio): ?>
	<tr>
	<!--	<td><?php echo h($municipio['Municipio']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($municipio['Municipio']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $municipio['Municipio']['id'])); ?>
		<!--	<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $municipio['Municipio']['id']), array(), __('Tem certeza que deseja remover o município # %s?', $municipio['Municipio']['id'])); ?>-->
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
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Municipio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
