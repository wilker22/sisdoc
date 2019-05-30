<div class="documentos form">
<?php

include_once "siglas.php";

		echo $this->Form->create('Documento'); ?>
			<fieldset>
				<legend><?php echo __('Cadastrar Documento'); ?></legend>
<?php

		echo $this->Form->input('tipo', array('empty'=>'::Selecione::',
												'options' => array( 'DOC' => 'DOC',
                                  'Ofício' => 'Ofício',
																	'Carta'=>'Carta',
																	'FAX' => 'FAX',
																	'CI' => 'CI' ,
																	'Nota Técnica' => 'Nota Técnica',
																	'Processo' => 'Processo'																																	)));
		echo $this->Form->input('numero', array('style'=>'width:150px'));
		echo $this->Form->input('procedencia');
		echo $this->Form->input('data_entrada', $paramsDatas);
		echo $this->Form->input('assunto');
		echo $this->Form->input('encaminhamento',array('empty'=>'::Selecione::', 'options' => $siglas));
		echo $this->Form->input('data_encaminhamento', $paramsDatas);
		echo $this->Form->input('providencia');
		echo $this->Form->input('data_providencia', $paramsDatas);
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('natureza', array('empty'=>'::Selecione::',
												'options' => array( 'Política' => 'Política',
																	 'Administrativa Interna'=>'Administrativa Interna',
																	 'Administrativa Externa' => 'Administrativa Externa'
																	)));
		echo $this->Form->input('imagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Documentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Relatório de Alevinos'), array('controller' => 'documentos', 'action' => 'relAlevinos')); ?> </li>
	</ul>
</div>
