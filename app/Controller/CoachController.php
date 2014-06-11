<?php
class CoachController extends AppController {

	public function admin_index() {

	}

	public function admin_edit($id = 1) {
		$data = $this->Coach->find('first', array('conditions' => array('coach_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {

		}
	}
}
?>