<?php

class AdminController extends AppController {

	public $uses = array('Param');

	public function admin_index() {
		
	}

	public function admin_params($id = 1) {
		$data = $this->Param->find('first', array('conditions' => array('param_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Param->id = $id;
			if ($this->Param->save($d, true, array('param_mail_contact', 'param_info_contact', 'param_is_maintenance', 'param_message_maintenance', 'param_team_desc', 'param_aboit_ours'))) {
				$this->Session->setFlash("Les parramètres ont bien été modifié !", 'notif');
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