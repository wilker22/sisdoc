<div class="municipios form">
<?php echo $this->Form->create('Municipio'); ?>
	<fieldset>
		<legend><?php echo __('Editar Municipio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('gravar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $this->Form->value('Municipio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Municipio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Municipios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
