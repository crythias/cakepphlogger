<?php
App::uses('AppController', 'Controller');
/**
 * PphlAgents Controller
 *
 * @property PphlAgent $PphlAgent
 * @property PaginatorComponent $Paginator
 */
class PphlAgentsController extends AppController {

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
		$this->PphlAgent->recursive = 0;
		$this->set('pphlAgents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PphlAgent->exists($id)) {
			throw new NotFoundException(__('Invalid pphl agent'));
		}
		$options = array('conditions' => array('PphlAgent.' . $this->PphlAgent->primaryKey => $id));
		$this->set('pphlAgent', $this->PphlAgent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PphlAgent->create();
			if ($this->PphlAgent->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl agent could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PphlAgent->exists($id)) {
			throw new NotFoundException(__('Invalid pphl agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PphlAgent->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PphlAgent.' . $this->PphlAgent->primaryKey => $id));
			$this->request->data = $this->PphlAgent->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PphlAgent->id = $id;
		if (!$this->PphlAgent->exists()) {
			throw new NotFoundException(__('Invalid pphl agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PphlAgent->delete()) {
			$this->Session->setFlash(__('The pphl agent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pphl agent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
