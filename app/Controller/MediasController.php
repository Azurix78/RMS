<?php

class MediasController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Media->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Media']['media_id'] = null;
			if ($this->Media->save($d, true, array('media_id', 'media_name', 'media_desc', 'media_img'))) {
				$this->Session->setFlash("Le media à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Media->find('first', array('conditions' => array('media_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Media->id = $d['Media']['media_id'];
			if ($this->Media->save($d, true, array('media_name', 'media_desc', 'media_img'))) {
				$this->Session->setFlash("Le media à bien été édité !", 'notif');
				$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Media->delete($id);
		$this->Session->setFlash("Le media à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Media->find('first', array('conditions' => array('media_id' => $id)));
		$this->media->id = $data['Media']['media_id'];
		($data['Media']['media_is_activated'] == 0) ? $this->Media->saveField('media_is_activated', 1) : $this->Media->saveField('media_is_activated', 0);
		$this->Session->setFlash("Le media à bien été mise à jour !", 'notif');
		$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
	}
}

?>