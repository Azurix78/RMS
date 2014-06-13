<?php

class HelpController extends AppController {

	public $uses = array('Help');

	public function index(){
		// Get info pour la page nous aider
		$help = $this->Help->findByHelpId(1);
		$this->set('help', $help);
	}

	public function admin_index() {
		// Get info pour la page nous aider
		$infoHelp = $this->Help->findByHelpId(1);

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Help->id = 1;
	        if ($this->Help->save($this->request->data)) {
	            $this->Session->setFlash(__('Informations mises à jour.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Erreur lors de la modification.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $infoHelp;
	    }
	}
}

?>