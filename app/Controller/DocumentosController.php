<?php
App::uses('AppController', 'Controller');
/**
 * Documentos Controller
 *
 * @property Documento $Documento
 * @property PaginatorComponent $Paginator
 */
class DocumentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
		array(
			'OR' => array(
					'filter1' => array(
						'Documento.assunto' => array('operator' => 'LIKE'),
				),
				'filter2' => array(
						'Municipio.id' => array(
								'select' => $this->Filter->select('Municipio', $this->Documento->Municipio->find('list', array('fields' => 'nome')))
						)
				),
				'filter3' => array(
					'Documento.procedencia' => array('operator' => 'LIKE'),
				),
				'filter4' => array(
					'Documento.id' => array('operator' => 'LIKE'),
				),
				'filter5' => array(
					'Documento.numero' => array('operator' => 'LIKE'),
				)

		)
	)
);

    $this->Filter->setPaginate('order', 'Documento.id DESC'); // optional
    $this->Filter->setPaginate('limit', 20);              // optional

    // Define conditions
    $this->Filter->setPaginate('conditions', $this->Filter->getConditions());            // opcional

    // Define conditions
 // $this->FilterResults->setPaginate('conditions', $this->FilterResults->getConditions());


        $this->helpers[] = "Time";
		$this->Documento->recursive = 0;
		$this->set('documentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Documento->exists($id)) {
			throw new NotFoundException(__('Documento Inválido'));
		}
		$options = array('conditions' => array('Documento.' . $this->Documento->primaryKey => $id));
		$this->set('documento', $this->Documento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Documento->create();
			if ($this->Documento->save($this->request->data)) {
				$this->Session->setFlash(__('Documento cadastrado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O documento não pode ser cadastrado, tente novamente!'));
			}
		}
		$municipios = $this->Documento->Municipio->find('list', array('fields'=>array('id','nome')));
		$this->set(compact('municipios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Documento->exists($id)) {
			throw new NotFoundException(__('Documento Inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Documento->save($this->request->data)) {
				$this->Session->setFlash(__('Documento atualizado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O documento não pode ser cadastrado, tente novamente!'));
			}
		} else {
			$options = array('conditions' => array('Documento.' . $this->Documento->primaryKey => $id));
			$this->request->data = $this->Documento->find('first', $options);
		}
		$municipios = $this->Documento->Municipio->find('list', array('fields'=>array('id','nome')));
		$this->set(compact('municipios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Documento->id = $id;
		if (!$this->Documento->exists()) {
			throw new NotFoundException(__('Documento Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Documento->delete()) {
			$this->Session->setFlash(__('Documento Removido com sucesso'));
		} else {
			$this->Session->setFlash(__('Documento no pode ser removido, tento novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function relAlevinos() {
	$this->loadModel('Documento');
	$documentos = new Documento();
	$documentos = $documentos->find('all', array(
		'conditions' => array(
			'Documento.assunto LIKE' => "%alevinos%")));

	$this->set(compact($documentos, 'documentos'));
//	debug($documentos) or die();
	$this->layout = 'pdf';

}

	}
