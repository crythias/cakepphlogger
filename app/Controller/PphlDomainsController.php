<?php
App::uses('AppController', 'Controller');
/**
 * PphlDomains Controller
 *
 * @property PphlDomain $PphlDomain
 * @property PaginatorComponent $Paginator
 */
class PphlDomainsController extends AppController {

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
		$this->PphlDomain->recursive = 0;
		$this->set('pphlDomains', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PphlDomain->exists($id)) {
			throw new NotFoundException(__('Invalid pphl domain'));
		}
		$options = array('conditions' => array('PphlDomain.' . $this->PphlDomain->primaryKey => $id));
		$this->set('pphlDomain', $this->PphlDomain->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PphlDomain->create();
			if ($this->PphlDomain->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl domain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl domain could not be saved. Please, try again.'));
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
		if (!$this->PphlDomain->exists($id)) {
			throw new NotFoundException(__('Invalid pphl domain'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PphlDomain->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl domain has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl domain could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PphlDomain.' . $this->PphlDomain->primaryKey => $id));
			$this->request->data = $this->PphlDomain->find('first', $options);
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
		$this->PphlDomain->id = $id;
		if (!$this->PphlDomain->exists()) {
			throw new NotFoundException(__('Invalid pphl domain'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PphlDomain->delete()) {
			$this->Session->setFlash(__('The pphl domain has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pphl domain could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
