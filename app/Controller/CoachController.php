<?php
class CoachController extends AppController {

	public function admin_index() {
		$id = 1;
		// Get informations sur le coaching
		$data = $this->Coach->find('first', array('conditions' => array('coach_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Coach->id = $id;
			if ($this->Coach->save($d, true, array('coach_content', 'coach_summary')) ) {
				$this->Session->setFlash("La page coaching à bien été édité !", 'notif');
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}
}
?>