<?php

class ActionsController extends AppController {

	public function admin_index() {
	}

	public function admin_add($id) {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Action']['action_id'] = null;
			if ($this->Action->save($d, true, array('action_id', 'program_id', 'action_title ', 'action_content', 'action_is_activated'))) {

			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer())
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Action->find('first', array('conditions' => array('action_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			if ($this->Action->save($d, true, array('action_title', 'action_content', 'action_is_activated'))) {

			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez !", 'notif', array('type' => 'error'));
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Action->delete($id);
		$this->Session->setFlash("L'action à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Action->find('first', array('conditions' => array('action_id' => $id)));
		$this->Action->id = $d['Action']['action_id'];
		($d['Action']['action_is_activated'] == 0) ? $this->Action->saveField('action_is_activated', 1) : $this->Action->saveField('action_is_activated', 0);
	}
}

?>