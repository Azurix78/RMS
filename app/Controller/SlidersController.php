<?php

class SlidersController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Slider->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Slider']['slider_id'] = null;
			$d['Slider']['slider_img'] = $this->upload_file($d['Slider']['slider_img'], 'sliders');
			if ($d['Slider']['slider_img'] != false) {
				if ($this->Slider->save($d, true, array('slider_id', 'slider_name', 'slider_desc', 'slider_img'))) {
					$this->Session->setFlash("L'article à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'sliders', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, réessayer !",'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Slider->find('first', array('conditions' => array('slider_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Slider->id = $id;
			$d['Slider']['slider_img'] = $d['Slider']['slider_img']['size'] == 0 ? $data['Slider']['slider_img'] : $this->upload_file($d['Slider']['slider_img'], 'sliders');
			if ($d['Slider']['slider_img'] != false) {
				if ($this->Slider->save($d, true, array('slider_name', 'slider_desc', 'slider_img'))) {
					if ($d['Slider']['slider_img'] != $data['Slider']['slider_img'])
						$this->delete_file($data['Slider']['slider_img'], 'sliders');
					$this->Session->setFlash("L'article à bien été supprimé !", 'notif');
					$this->redirect(array('controller' => 'sliders', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$data = $this->Slider->find('first', array('conditions' => array('slider_id' => $id)));
		if ($this->delete_file($data['Slider']['slider_img'], 'sliders')) {
			$this->Slider->delete($id);
			$this->Session->setFlash("L'article à bien été supprimé !", 'notif');
			$this->redirect($this->referer());
		}
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Slider->find('first', array('conditions' => array('slider_id' => $id)));
		$this->Slider->id = $data['Slider']['slider_id'];
		($data['Slider']['slider_is_activated'] == 0) ? $this->Slider->saveField('slider_is_activated', 1) : $this->Slider->saveField('slider_is_activated', 0);
		$this->Session->setFlash("l'article à bien été modifié !", 'notif');
		$this->redirect(array('controller' => 'sliders', 'action' => 'index', 'admin' => true));
	}
}

?>