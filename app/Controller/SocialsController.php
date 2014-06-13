<?php

class SocialsController extends AppController {

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Social']['social_id'] = null;
			$d['Social']['social_img'] = $this->upload_file($d['Social']['social_img'], 'socials');
			if ($d['Social']['social_img'] != false) {
				if ($this->Social->save($d, true, array('social_id', 'social_name', 'social_img', 'social_link'))) {
					$this->Session->setFlash("Le réseau à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
					$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
				}
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Social->find('first', array('conditions' => array('social_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Social->id = $data['Social']['social_id'];
			$d['Social']['social_img'] = $d['Social']['social_img']['size'] == 0 ? $data['Social']['social_img'] : $this->upload_file($d['Social']['social_img'], 'socials');
			if ($d['Social']['social_img'] != false) {
				if ($this->Social->save($d, true, array('social_name', 'social_img', 'social_link'))) {
					$this->Session->setFlash("Le réseau à bien été édité !", 'notif');
					$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
					$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
				}
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$data = $this->Social->find('first', array('conditions' => array('social_id' => $id)));
		if ($this->delete_file($data['Social']['social_img'], 'socials')) {
			$this->Social->delete($id);
			$this->Session->setFlash("Le réseau à bien été supprimé !", 'notif');
			$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
		}
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Social->find('first', array('conditions' => array('social_id' => $id)));
		$this->Social->id = $data['Social']['social_id'];
		($data['Social']['social_is_activated'] == 0) ? $this->Social->saveField('social_is_activated', 1) : $this->Social->saveField('social_is_activated', 0);
		$this->Session->setFlash("Le réseau à bien été édité !", 'notif');
		$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
	}
}

?>