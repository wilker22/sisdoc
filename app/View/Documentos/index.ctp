<fieldset>
	<legend><?php echo __('Filtros de Busca'); ?></legend>
		<?php
		echo $this->Search->create();
		echo $this->Search->input('filter2', array('class' => 'select-box'));
		echo '<br /> <br />';
		echo '<h3>Assunto</h3>';
		echo $this->Search->input('filter1');
		echo '<h3>Procedência</h3>';
		echo $this->Search->input('filter3', array('style' => 'width: 800px'));
		echo '<h3>ID</h3>';
		echo $this->Search->input('filter4',array('style' => 'width: 100px'));
		echo '<h3>Número</h3>';
		echo $this->Search->input('filter5', array('style' => 'width: 100px'));
		echo $this->Search->end(__('Buscar', true));
		?>
</fieldset>


<div class="documentos index">
	<h2><?php echo __('Documentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('procedencia'); ?></th>
			<th><?php echo $this->Paginator->sort('data_entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('encaminhamento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_encaminhamento'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('providencia'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('data_providencia'); ?></th>-->
			<th><?php echo $this->Paginator->sort('municipio_id'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('natureza'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('imagem'); ?></th>-->
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($documentos as $documento): ?>
	<tr>
		<td><?php echo h($documento['Documento']['id']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['numero']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['procedencia']); ?>&nbsp;</td>
		<td><?php echo h($this->Time->format('d-m-Y', $documento['Documento']['data_entrada'])); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['assunto']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['encaminhamento']); ?>&nbsp;</td>
		<td><?php echo h($this->Time->format('d-m-Y',$documento['Documento']['data_encaminhamento'])); ?>&nbsp;</td>
		<!--<td><?php echo h($documento['Documento']['providencia']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($this->Time->format('d-m-Y',$documento['Documento']['data_providencia'])); ?>&nbsp;</td>-->
		<td>
        <?php echo $this->Html->link($documento['Municipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $documento['Municipio']['id'])); ?>
		</td>
		<!--<td><?php echo h($documento['Documento']['natureza']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($documento['Documento']['imagem']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $documento['Documento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $documento['Documento']['id'])); ?>
		<!--	<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $documento['Documento']['id']), array(), __('Tem certeza que deseja remover # %s?', $documento['Documento']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, começando pelo registro {:start}, terminando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
        echo $this->Paginator->first( ' <<'.__('início'), array(), null, array('class' => 'first disabled'));
        echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
        echo $this->Paginator->last(__('final') . ' >>', array(), null, array('class' => 'last disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Documento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Relatório de Alevinos'), array('controller' => 'documentos', 'action' => 'relAlevinos')); ?> </li>
	</ul>
</div>
