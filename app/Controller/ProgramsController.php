<?php

class ProgramsController extends AppController {

	public $uses = array('Action', 'Program', 'Report');

	public function index(){
		if($this->Program->find('first', array('conditions' => array('program_is_activated >' => 0)))){
			// Get info sur le programme, les actions et les compte rendu
			
			$programs = $this->Program->find('all', array('conditions' =>array('program_is_activated >' => 0)));
			foreach ($programs as $key => $value) {
				$programs[$key]['Program']['slug'] = $this->slug($value['Program']['program_name']);
			}

			$this->set('programs', $programs);

			$reports = $this->Report->find('all', array('conditions' => array('program_id' => $programs[0]['Program']['program_id'], 'report_is_activated >' => 0), 'order' => array('report_date DESC')));
			foreach ($reports as $key => $value) {
				$reports[$key]['Report']['slug'] = $this->slug($value['Report']['report_name']);
			}

			$this->set('actions', $this->Action->find('all', array('conditions' => array('program_id' => $programs[0]['Program']['program_id'], 'action_is_activated >' => 0))));
			$this->set('reports', $reports);
		}
		else{
			$this->redirect(array('controller' => 'home', 'action' => 'index', 'admin' => false));
		}
	}

	// Vue des programmes
	public function view($id){
		if($this->Program->find('first', array('conditions' => array('program_id' => $id, 'program_is_activated >' => 0)))){
			// Get info sur le programme, les actions et les compte rendu

			$programs = $this->Program->find('all', array('conditions' =>array('program_is_activated >' => 0)));
			foreach ($programs as $key => $value) {
				$programs[$key]['Program']['slug'] = $this->slug($value['Program']['program_name']);
			}

			$reports = $this->Report->find('all', array('conditions' => array('program_id' => $id, 'report_is_activated >' => 0), 'order' => array('report_date DESC')));
			foreach ($reports as $key => $value) {
				$reports[$key]['Report']['slug'] = $this->slug($value['Report']['report_name']);
			}

			$this->set('programs', $programs);
			$this->set('prog', $this->Program->find('first', array('conditions' => array('program_id' => $id, 'program_is_activated >' => 0))));
			$this->set('actions', $this->Action->find('all', array('conditions' => array('program_id' => $id, 'action_is_activated >' => 0))));
			$this->set('reports', $reports);
			$this->set('id', $id);
		}
		else{
			$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => false));
		}
	}

	public function admin_index() {
		$this->set('datas', $this->Program->find('all'));
	}

	public function admin_show($id) {
		$this->set('actions', $this->Action->find('all'));
		$this->set('reports', $this->Report->find('all'));
	}

	// Ajout de programmes
	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Program']['program_id'] = null; // Secu - Eviter l'edit depuis l'ajout
			if ($this->Program->save($d, true, array('program_id', 'program_name', 'program_content', 'program_is_activated'))) {
				$this->Session->setFlash("Le programme à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réessayez", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	// Edit du programme
	public function admin_edit($id) {
		// Get info sur le programme
		$data = $this->Program->find('first', array('conditions' => array('program_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Program->id = $id;
			if ($this->Program->save($d, true, array('program_name', 'program_content', 'program_is_activated'))) {
				$this->Session->setFlash("Le programme à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réeessayez", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
		$this->set('id', $data['Program']['program_id']);
		$this->set('actions', $this->Action->find('all', array('conditions' => array('program_id' => $id))));
		$this->set('reports', $this->Report->find('all', array('conditions' => array('program_id' => $id))));
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->Program->delete($id);
		$this->Session->setFlash("Le programme à bien été supprimé !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Program->find('first', array('conditions' => array('program_id' => $id)));
		$this->Program->id = $data['Program']['program_id'];
		($data['Program']['program_is_activated'] == 0) ? $this->Program->saveField('program_is_activated', 1) : $this->Program->saveField('program_is_activated', 0);
		$this->Session->setFlash("L'action à bien été edité !", 'notif');
		$this->redirect(array('controller' => 'programs', 'action' => 'index', 'admin' => true));
	}
}

?>