<?php

class ReportsController extends AppController {

	public function admin_add($id) {
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$d['Report']['report_id'] = null;
			$d['Report']['program_id'] = $id;
			if ($this->Report->save($d, true, array('report_id', 'program_id', 'report_name', 'report_content', 'report_date', 'report_is_activated'))) {
				$this->Session->setFlash("Le rapport à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'edit', $id, 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Report->find('first', array('conditions' => array('report_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Report->id = $data['Report']['report_id'];
			if ($this->Report->save($d, true, array('report_name', 'report_content', 'report_date', 'report_is_activated'))) {
				$this->Session->setFlash("Le rapport à bien été édité !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'edit', $data['Report']['program_id'], 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$data = $this->Report->find('first', array('conditions' => array('report_id' => $id)));
		$this->Report->delete($id);
		$this->Session->setFlash("Le rapport à bien été supprimé !", 'notif');
		$this->redirect(array('controller' => 'programs', 'action' => 'edit', $data['Report']['program_id'], 'admin' => true));
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Report->find('first', array('conditions' => array('report_id' => $id)));
		$this->Report->id = $data['Report']['report_id'];
		($data['Report']['report_is_activated'] == 0) ? $this->Report->saveField('report_is_activated', 1) : $this->Report->saveField('report_is_activated', 0);
		$this->Session->setFlash("Le rapport à bien été modifié !", 'notif');
		$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
	}
}

?>