<div class="documentos view">
<h2><?php echo __('Documento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procedencia'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['procedencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Entrada'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['data_entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encaminhamento'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['encaminhamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Encaminhamento'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['data_encaminhamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Providencia'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['providencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Providencia'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['data_providencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documento['Municipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $documento['Municipio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Natureza'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['natureza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['imagem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Documento'), array('action' => 'edit', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Remover Documento'), array('action' => 'delete', $documento['Documento']['id']), null, __('Tem certeza que deseja remover # %s?', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Documentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Documento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Relatório de Alevinos'), array('controller' => 'documentos', 'action' => 'relAlevinos')); ?> </li>
	</ul>
</div>
