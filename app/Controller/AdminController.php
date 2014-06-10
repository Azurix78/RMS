<?php

class AdminController extends AppController {

	public $uses = array('Param');

	public function admin_index() {

	}

	public function admin_params() {
		$data = $this->Param->find('first', array('conditions' => array('param_id' => 1)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			if ($this->Param->save($d, true, array())) {
				
			} else {
				
			}
		}
		$this->request->data = $data;
	}

}

?>