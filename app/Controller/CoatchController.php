<?php

class CoatchController extends AppController {

	public function admin_index() {

	}

	public function admin_edit($id = 1) {
		$data = $this->Coatch->find('first', array('conditions' => array('coatch_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {

		}
	}
}

?>