<?php

class TeamsController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Team->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			if ($this->Team->save($d, true, array())) {

			} else {

			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {

		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Team->delete($id);
		$this->Session->setFlash("L'intervenant à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}
}

?>