<?php

class MediasController extends AppController {

	// Get articles de presse
	public function admin_index() {
		$this->set('datas', $this->Media->find('all'));
	}

	// Ajout de medias
	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Media']['media_id'] = null; // Sécurisation, vider l'ID pour éviter l'édition a partir de l'ajout
			// Upload de l'image
			$d['Media']['media_img'] = $this->upload_file($d['Media']['media_img'], 'medias');
			if ($d['Media']['media_img'] != false) {
				if ($this->Media->save($d, true, array('media_id', 'media_name', 'media_desc', 'media_img', 'media_link'))) {
					$this->Session->setFlash("Le media à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
	}

	// Edition des medias
	public function admin_edit($id) {
		$data = $this->Media->find('first', array('conditions' => array('media_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Media->id = $id;
			// Upload de l'image ( si vide, tu edit pas sinon tu edit l'image)
			$d['Media']['media_img'] = $d['Media']['media_img']['size'] == 0 ? $data['Media']['media_img'] : $this->upload_file($d['Media']['media_img'], 'medias');
			if ($d['Media']['media_img'] != false) {
				// Si edit de l'image -> suppression de l'ancienne
				if ($data['Media']['media_img'] != $d['Media']['media_img'])
					$this->delete_file($data['Media']['media_img'], 'medias');
				if ($this->Media->save($d, true, array('media_name', 'media_desc', 'media_img', 'media_link'))) {
					$this->Session->setFlash("Le media à bien été édité !", 'notif');
					$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
		$this->request->data = $data;
	}

	// Suppression des articles de presse
	public function admin_remove($id) {
		$this->autoRender = false;
		$media = $this->Media->find('first', array('conditions' => array('media_id' => $id)));
		if ($this->delete_file($media['Media']['media_img'], 'medias')) {
			$this->Media->delete($id);
			$this->Session->setFlash("Le media à bien été supprimé !", 'notif');
			$this->redirect($this->referer());
		}
	}

	// Acivation / Desactivation des articles de presse
	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Media->find('first', array('conditions' => array('media_id' => $id)));
		$this->Media->id = $id;
		// Si activé -> tu désactives sinon tu actives
		($data['Media']['media_is_activated'] == 0) ? $this->Media->saveField('media_is_activated', 1) : $this->Media->saveField('media_is_activated', 0);
		$this->Session->setFlash("Le media à bien été mise à jour !", 'notif');
		$this->redirect(array('controller' => 'medias', 'action' => 'index', 'admin' => true));
	}

	// Page de listing des articles de presse
	public function index(){
		$dataMedia = $this->Media->find('all');

		$this->set('dataMedia', $dataMedia);
	}
}

?>