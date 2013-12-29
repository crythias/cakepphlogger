<?php
App::uses('AppController', 'Controller');
/**
 * PphlSettings Controller
 *
 * @property PphlSetting $PphlSetting
 * @property PaginatorComponent $Paginator
 */
class PphlSettingsController extends AppController {

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
		$this->PphlSetting->recursive = 0;
		$this->set('pphlSettings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PphlSetting->exists($id)) {
			throw new NotFoundException(__('Invalid pphl setting'));
		}
		$options = array('conditions' => array('PphlSetting.' . $this->PphlSetting->primaryKey => $id));
		$this->set('pphlSetting', $this->PphlSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PphlSetting->create();
			if ($this->PphlSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl setting could not be saved. Please, try again.'));
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
		if (!$this->PphlSetting->exists($id)) {
			throw new NotFoundException(__('Invalid pphl setting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PphlSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PphlSetting.' . $this->PphlSetting->primaryKey => $id));
			$this->request->data = $this->PphlSetting->find('first', $options);
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
		$this->PphlSetting->id = $id;
		if (!$this->PphlSetting->exists()) {
			throw new NotFoundException(__('Invalid pphl setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PphlSetting->delete()) {
			$this->Session->setFlash(__('The pphl setting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pphl setting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
