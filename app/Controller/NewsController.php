<?php

class NewsController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->News->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['News']['news_id'] = null;
			if ($this->News->save($d, true, array('news_id', 'news_title', 'news_content', 'news_img', 'news_is_activated'))) {
				$this->Session->setFlash("La news à bien été ajouté !", 'notif');
				$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survnu, réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_edit($id) {
		$data = $this->News->find('first', array('conditions' => array('news_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->News->id = $data['News']['news_id'];
			if ($this->News->save($d, true, array('news_title', 'news_content', 'news_img', 'news_is_activated'))) {
				$this->Session->setFlash("La news à bien été édité !", 'notif');
				$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
			} else {
				$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
				$this->redirect($this->referer());
			}
		}
		$this->request->data = $data;
	}

	public function admin_remove($id) {
		$this->autoRender = false;
		$this->News->delete($id);
		$this->Session->setFlash("La news à bien été supprimer !", 'notif');
		$this->redirect($this->referer());
	}

	public function admin_activated($id) {
		$this->autoRender = true;
		$data = $this->News->find('first', array('conditions', array('news_id' => $id)));
		$this->News->id = $data['News']['news_id'];
		($data['News']['news_is_activated'] == 0) ? $this->News->saveField('news_is_activated', 1) : $this->News->saveField('news_is_activated', 0);
		$this->Session->setFlash("La news à bien été activé !", 'notif', array('type' => 'error'));
		$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
	}
}

?>