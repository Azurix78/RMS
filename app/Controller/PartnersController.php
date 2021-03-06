<?php

class PartnersController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->Partner->find('all'));
	}

	// Ajout de partnaires
	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Partner']['partner_id'] = null; // Secu, eviter l'edit depuis l'ajout
			$d['Partner']['partner_date_added'] = date('Ymd');
			// Upload de l'image
			$d['Partner']['partner_img'] = $this->upload_file($d['Partner']['partner_img'], 'partners');
			if ($d['Partner']['partner_img'] != false) {
				if ($this->Partner->save($d, true, array('partner_id', 'partner_type', 'partner_name', 'partner_desc', 'partner_img', 'partner_to_home', 'partner_to_page', 'partner_date_added'))) {
					$this->Session->setFlash("Le partenaire à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'partners', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
	}

	// Edition des partnaires
	public function admin_edit($id) {
		// Get info partenaire
		$data = $this->Partner->find('first', array('conditions' => array('partner_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$d['Partner']['partner_id'] = $data['Partner']['partner_id'];
			$this->Partner->id = $data['Partner']['partner_id'];
			// Upload de l'image - Si image non vide - tu edit l'image
			$d['Partner']['partner_img'] = $d['Partner']['partner_img']['size'] == 0 ? $data['Partner']['partner_img'] : $this->upload_file($d['Partner']['partner_img'], 'partners');
			if ($d['Partner']['partner_img'] != false) {
				if ($data['Partner']['partner_img'] != $d['Partner']['partner_img'])
					$this->delete_file($data['Partner']['partner_img'], 'partners');
				if ($this->Partner->save($d, true, array('partner_type', 'partner_name', 'partner_desc', 'partner_img', 'partner_to_home', 'partner_to_page'))) {
					$this->Session->setFlash("Le partenaire à bien été edité !", 'notif');
					$this->redirect(array('controller' => 'partners', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
		$this->request->data = $data;
	}

	// Suppression de partenaires
	public function admin_remove($id) {
		$this->autoRender = false;
		$partner = $this->Partner->find('first', array('conditions' => array('partner_id' => $id)));
		if ($this->delete_file($partner['Partner']['partner_img'], 'partners')) {
			$this->Partner->delete($id);
			$this->Session->setFlash("Le partenaire a bien été supprimé !", 'notif');
			$this->redirect($this->referer());
		}
	}

	// Activation / Desactivation des partenaires
	public function admin_activated($type, $id) {
		$this->autoRender = false;
		$data = $this->Partner->find('first', array('conditions' => array('partner_id' => $id)));
		$this->Partner->id = $data['Partner']['partner_id'];
		if ($type == 0)
			($data['Partner']['partner_to_home'] == 0) ? $this->Partner->saveField('partner_to_home', 1) : $this->Partner->saveField('partner_to_home', 0);
		else if ($type == 1)
			($data['Partner']['partner_to_page'] == 0) ? $this->Partner->saveField('partner_to_page', 1) : $this->Partner->saveField('partner_to_page', 0);
		else if ($type == 2)
			($data['Partner']['partner_type'] == 0) ? $this->Partner->saveField('partner_type', 1) : $this->Partner->saveField('partner_type', 0);
		$this->Session->setFlash("Le partenaire à bien été modifié !", 'notif');
		$this->redirect(array('controller' => 'partners', 'action' => 'index', 'admin' => true));
	}

	// Page de listing des partenaires
	public function index(){
		$this->set('partnersTop', $this->Partner->find('all', array('conditions' => array('partner_to_page >' => 0, 'partner_type'=> 1))));
		$this->set('partnersBot', $this->Partner->find('all', array('conditions' => array('partner_to_page >' => 0, 'partner_type'=> 0))));
	}
}

?>