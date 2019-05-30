<div class="municipios form">
<?php echo $this->Form->create('Municipio'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Municipio'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Municipios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
