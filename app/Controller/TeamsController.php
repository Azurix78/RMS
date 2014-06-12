<?php

class TeamsController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Team->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Team']['team_id'] = null;
			$d['Team']['team_img'] = null;
			$d['Team']['team_date_added'] = date('Y-m-d');
			if ($this->Team->save($d, true, array('team_id', 'team_name', 'team_desc', 'team_img', 'team_date_added'))) {
				$this->Session->setFlash("L'intervenant à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Team->id = $id;
			if ($this->Team->save($d, true, array())) {
				$this->Session->setFlash("L'intervenat à bien été édité !", 'notif');
				$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Team->delete($id);
		$this->Session->setFlash("L'intervenant à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		$this->Team->id = $id;
		($data['Team']['team_is_activated'] == 0) ? $this->Team->saveField('team_is_activated', 1) : $this->Team->saveField('team_is_activated', 0);
		$this->Session->setFlash("L'intervenant à bien été modifié !", 'notif');
		$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
	}
}

?>