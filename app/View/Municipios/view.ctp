<div class="municipios view">
<h2><?php echo __('Municipio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipio'), array('action' => 'edit', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipio'), array('action' => 'delete', $municipio['Municipio']['id']), null, __('Are you sure you want to delete # %s?', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documentos'); ?></h3>
	<?php if (!empty($municipio['Documento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Procedencia'); ?></th>
		<th><?php echo __('Data Entrada'); ?></th>
		<th><?php echo __('Assunto'); ?></th>
		<th><?php echo __('Encaminhamento'); ?></th>
		<th><?php echo __('Data Encaminhamento'); ?></th>
		<th><?php echo __('Providencia'); ?></th>
		<th><?php echo __('Data Providencia'); ?></th>
		<th><?php echo __('Municipio Id'); ?></th>
		<th><?php echo __('Natureza'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($municipio['Documento'] as $documento): ?>
		<tr>
			<td><?php echo $documento['id']; ?></td>
			<td><?php echo $documento['tipo']; ?></td>
			<td><?php echo $documento['numero']; ?></td>
			<td><?php echo $documento['procedencia']; ?></td>
			<td><?php echo $documento['data_entrada']; ?></td>
			<td><?php echo $documento['assunto']; ?></td>
			<td><?php echo $documento['encaminhamento']; ?></td>
			<td><?php echo $documento['data_encaminhamento']; ?></td>
			<td><?php echo $documento['providencia']; ?></td>
			<td><?php echo $documento['data_providencia']; ?></td>
			<td><?php echo $documento['municipio_id']; ?></td>
			<td><?php echo $documento['natureza']; ?></td>
			<td><?php echo $documento['imagem']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documentos', 'action' => 'view', $documento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documentos', 'action' => 'edit', $documento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documentos', 'action' => 'delete', $documento['id']), null, __('Are you sure you want to delete # %s?', $documento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
