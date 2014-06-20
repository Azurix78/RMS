<?php

class AdminController extends AppController {

	public $uses = array('Param', 'Social');

	public function admin_index($id = 1) {
		$data = $this->Param->find('first', array('conditions' => array('param_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Param->id = $id;
			$d['Param']['param_home_link'] = $d['Param']['param_home_link']['size'] == 0 ? $data['Param']['param_home_link'] : $this->upload_file($d['Param']['param_home_link'], 'param');
			if ($this->Param->save($d, true, array('param_about_ours', 'param_home_link'))) {
				if ($data['Param']['param_home_link'] != $d['Param']['param_home_link'])
					$this->delete_file($data['Param']['param_home_link'], 'param');
				$this->Session->setFlash("Les paramètres ont bien été modifiés !", 'notif');
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