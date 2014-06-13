<?php

class AdminController extends AppController {

	public $uses = array('Param', 'Social');

	public function admin_index($id = 1) {
		$data = $this->Param->find('first', array('conditions' => array('param_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Param->id = $id;
			if ($this->Param->save($d, true, array('param_about_ours'))) {
				$this->Session->setFlash("Les parramètres ont bien été modifiés !", 'notif');
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}

		$this->set('datas', $this->Social->find('all'));
		$this->request->data = $data;
	}

}

?>