<?php

class TeamsController extends AppController {

	public $uses = array('Param', 'Team');

	public function admin_index() {
		$user = $this->Param->findByParamId(1);

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Param->id = 1;
	        if ($this->Param->save($this->request->data)) {
	            $this->Session->setFlash(__('Informations mises à jour.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Erreur lors de la modification.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $user;
	    }

		$this->set('datas', $this->Team->find('all'));
		$this->set('user', $user);
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['Team']['team_id'] = null;
			$d['Team']['team_img'] = $this->upload_file($d['Team']['team_img'], 'teams');
			$d['Team']['team_date_added'] = date('Y-m-d');
			if ($d['Team']['team_img'] != false) {
				if ($this->Team->save($d, true, array('team_id', 'team_name', 'team_desc', 'team_img', 'team_date_added'))) {
					$this->Session->setFlash("L'intervenant à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->Team->id = $id;
			$d['Team']['team_img'] = $d['Team']['team_img']['size'] == 0 ? $data['Team']['team_img'] : $this->upload_file($d['Team']['team_img'], 'teams');
			if ($d['Team']['team_img'] != false) {
				if ($this->Team->save($d, true, array())) {
					if ($d['Team']['team_img'] != $data['Team']['team_img'])
						$this->delete_file($data['Team']['team_img'], 'teams');
					$this->Session->setFlash("L'intervenat à bien été édité !", 'notif');
					$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
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
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		if ($this->delete_file($data['Teams']['team_img'], 'teams')) {
			$this->Team->delete($id);
			$this->Session->setFlash("L'intervenant à bien été supprimé !", 'notif');
			$this->redirect($this->referer());
		}
	}

	public function admin_activated($id) {
		$this->autoRender = false;
		$data = $this->Team->find('first', array('conditions' => array('team_id' => $id)));
		$this->Team->id = $id;
		($data['Team']['team_is_activated'] == 0) ? $this->Team->saveField('team_is_activated', 1) : $this->Team->saveField('team_is_activated', 0);
		$this->Session->setFlash("L'intervenant à bien été modifié !", 'notif');
		$this->redirect(array('controller' => 'teams', 'action' => 'index', 'admin' => true));
	}

	public function index(){
		$this->set('teams', $this->Team->find('all', array('conditions' => array('team_is_activated >' => 0))));
		$this->set('params', $this->Param->findByParamId(1));
	}
}

?>