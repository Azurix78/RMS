<?php

class UsersController extends AppController {

	public function admin_login() {
		if (!$this->Auth->loggedIn()) {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash("Vous êtes maintenant connecté !", 'notif');
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
				/**

					A finir

				*/
			}else
				$this->request->data = $this->User->read();
		}else{
			$this->Session->setFlash("Vous n'êtes pas connecté !", 'notif', array('type' => 'error'));
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