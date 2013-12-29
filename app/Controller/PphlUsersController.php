<?php
App::uses('AppController', 'Controller');
/**
 * PphlUsers Controller
 *
 * @property PphlUser $PphlUser
 * @property PaginatorComponent $Paginator
 */
class PphlUsersController extends AppController {

	public function beforeFilter() {
    	parent::beforeFilter();
	    // Allow users to register and logout.
    	$this->Auth->allow('add', 'logout');
	}

	public function login() {
    	if ($this->request->is('post')) {
        	if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
    	    }
        	$this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
    	return $this->redirect($this->Auth->logout());
	}
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
		$this->PphlUser->recursive = 0;
		$this->set('pphlUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PphlUser->exists($id)) {
			throw new NotFoundException(__('Invalid pphl user'));
		}
		$options = array('conditions' => array('PphlUser.' . $this->PphlUser->primaryKey => $id));
		$this->set('pphlUser', $this->PphlUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PphlUser->create();
			if ($this->PphlUser->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl user could not be saved. Please, try again.'));
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
		if (!$this->PphlUser->exists($id)) {
			throw new NotFoundException(__('Invalid pphl user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PphlUser->save($this->request->data)) {
				$this->Session->setFlash(__('The pphl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pphl user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PphlUser.' . $this->PphlUser->primaryKey => $id));
			$this->request->data = $this->PphlUser->find('first', $options);
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
		$this->PphlUser->id = $id;
		if (!$this->PphlUser->exists()) {
			throw new NotFoundException(__('Invalid pphl user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PphlUser->delete()) {
			$this->Session->setFlash(__('The pphl user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pphl user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
