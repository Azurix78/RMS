<?php

class ContactController extends AppController {

	public $uses = array('User');

	public function admin_index() {

	}

	public function admin_edit() {

		$user = $this->User->findById(2);

	    if ($this->request->is(array('post', 'put'))) {
	        $this->User->id = 2;
	        if ($this->User->save($this->request->data)) {
	            $this->Session->setFlash(__('Informations mises à jour.'));
	            return $this->redirect(array('action' => 'edit'));
	        }
	        $this->Session->setFlash(__('Erreur lors de la modification.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $user;
	    }
	}
}

?>