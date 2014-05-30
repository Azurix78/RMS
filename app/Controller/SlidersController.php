<?php

class SlidersController extends AppController {
	
	public function admin_index() {

	}

	public function admin_add() {

	}

	public function admim_edit($id) {
		$data = $this->slider->find('first', array('conditions' => array('slider_id' => $id)));
		
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Slider->delete($id);
		$this->Session->setFlash("L'article à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$data = $this->Slider->find('first', array('conditions' => array('slider_id' => $id)));
		$this->Slider->id = $data['Slider']['slider_id'];
		($data['Slider']['slider_is_activated'] == 0) ? $this->Slider->saveField('slider_is_activated', 1) : $this->Slider->saveField('slider_is_activated', 0);
		$this->Session->setFlash("l'article à bien été modifié !", 'notif');
		$this->redirect($this->referer());
	}
}

?>