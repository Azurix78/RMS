<?php

class ProgramsController extends AppController {

	public $uses = array('Action', 'Report')

	public function admin_index() {
		$this->set('datas', $this->Program->find('all'));
	}

	public function admin_show($id) {
		$this->ser('actions', $this->Action->find('all'));
		$this->set('reports', $this->Report->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Programs']['program_id'] = null;
			if ($this->Program->save($d, true, array('program_id', 'program_name', 'program_content', 'program_is_activated'))) {
				$this->Session->setFlash("Le programme à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réessayez", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Program->find('first', array('conditions' => array('program_id' => $id)));
		if ($this->requet->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			if ($this->Program->save($d, true, array('program_name', 'program_content', 'program_is_activated'))) {
				$this->Session->setFlash("Le programme à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Program->delete($id);
		$this->Session->setFlash("Le programme à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Program->find('first', array('conditions' => array('program_id' => $id)));
		$this->Program->id = $d['Program']['program_id'];
		($d['Program']['program_is_activated'] == 0) ? $this->Program->saveField('program_is_activated', 1) : $this->Program->saveField('program_is_activated', 0);
		$this->Session->setFlash("L'action à bien été edité !", 'notif');
		$this->redirect(array('controller' => 'actions', 'action' => 'index', 'admin' => true));
	}
}

?>