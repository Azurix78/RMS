<?php

class UsersController extends AppController {

	public function admin_login() {
		if (!$this->Auth->loggedIn()) {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->User->id = $this->Session->read('Auth.User.id');
					$this->User->saveField('modified', date('Y-m-d H:m:s'));
					$this->Session->setFlash("Vous êtes maintenant connecté !");
					$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
				}else
					$this->Session->setFlash("Username ou Mots de passe incorrect !", 'notif', array('type' => 'error'));
			}
		}else{
			$this->Session->setFlash("Vous êtes déjà connecté !", 'notif');
			$this->redirect(array('controller' => 'admin', 'action' => 'index', 'admin' => true));
		}
	}

	public function admin_edit() {
		if ($this->Auth->loggedIn()) {
			$user_id = $this->Session->read('Auth.User.id');
			if ($this->request->is('post') ||$this->request->is('put')) {
				$d = $this->request->data;
				$d['User']['password'] = Security::hash($d['User']['password'], null, true);
				$this->User->id = $this->Session->read('Auth.User.id');
				if ($this->User->save($d, true, array('password'))) {
					$this->Session->setFlash("Votre mot de passe à bien été modifié !", 'notif');
					$this->redirect(array('controller' => 'users', 'action' => 'edit', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}else
				$this->request->data = $this->User->read();
		}else{
			$this->Session->setFlash("Mot de passe invalide !", 'notif', array('type' => 'error'));
			$this->redirect($this->referer());
		}
	}

	public function admin_logout() {
 		$this->Auth->logout();
 		$this->Session->setFlash("Vous êtes à présent déconnecté !", 'notif');
 		$this->redirect($this->referer());
	}
}

?>