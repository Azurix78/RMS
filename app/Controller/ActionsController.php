<?php

class ActionsController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Actions->find('all'));
	}

	public function admin_add($id) {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Action']['action_id'] = null;
			$d['Action']['program_id'] = $id;
			if ($this->Action->save($d, true, array('action_id', 'program_id', 'action_title', 'action_content', 'action_is_activated', 'action_date_created'))) {
				$this->Session->setFlash("L'action à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'edit', $id, 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Action->find('first', array('conditions' => array('action_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Action->id = $data['Action']['action_id'];
			if ($this->Action->save($d, true, array('action_title', 'action_content', 'action_is_activated', 'action_date_created'))) {
				$this->Session->setFlash("L'action à bien été modifier !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'edit', $data['Action']['program_id'], 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$data = $this->Action->find('first', array('conditions' => array('action_id' => $id)));
		$this->Action->delete($id);
		$this->Session->setFlash("L'action à bien été supprimé !", 'notif');
		$this->redirect(array('controller' => 'programs', 'action' => 'edit', $data['Action']['program_id'], 'admin' => true));
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Action->find('first', array('conditions' => array('action_id' => $id)));
		$this->Action->id = $d['Action']['action_id'];
		($d['Action']['action_is_activated'] == 0) ? $this->Action->saveField('action_is_activated', 1) : $this->Action->saveField('action_is_activated', 0);
		$this->Session->setFlash("L'action à bien été edité !", 'notif');
		$this->redirect(array('controller' => 'actions', 'action' => 'index', 'admin' => true));
	}
}

?>