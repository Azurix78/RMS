<?php

class NewsController extends AppController {

	public function admin_index() {
		$this->set('datas', $this->News->find('all'));
	}

	// Ajout de news
	public function admin_add() {
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['News']['news_id'] = null; // Secu pour éviter l'edition depuis cette page
			// Upload de l'image
			$d['News']['news_img'] = $this->upload_file($d['News']['news_img'], 'news');
			if ($d['News']['news_img'] != false) {
				if ($this->News->save($d, true, array('news_id', 'news_title', 'news_content', 'news_img', 'news_is_activated', 'news_summary'))) {
					$this->Session->setFlash("La news à bien été ajouté !", 'notif');
					$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survnu, réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
	}

	// Edition de news
	public function admin_edit($id) {
		$data = $this->News->find('first', array('conditions' => array('news_id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			$this->News->id = $data['News']['news_id'];
			// Upload de l'image - si non vide, tu edit
			$d['News']['news_img'] = $d['News']['news_img']['size'] == 0 ? $data['News']['news_img'] : $this->upload_file($d['News']['news_img'], 'news');
			if ($d['News']['news_img'] != false) {
				if ($data['News']['news_img'] != $d['News']['news_img'])
					$this->delete_file($data['News']['news_img'], 'news');
				if ($this->News->save($d, true, array('news_title', 'news_content', 'news_img', 'news_is_activated', 'news_summary'))) {
					$this->Session->setFlash("La news à bien été édité !", 'notif');
					$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash("Un problème est survenu, Réessayer !", 'notif', array('type' => 'error'));
					$this->redirect($this->referer());
				}
			}
		}
		$this->request->data = $data;
	}

	// Suppression de news
	public function admin_remove($id) {
		$this->autoRender = false;
		$news = $this->News->find('first', array('conditions' => array('news_id' => $id)));
		if ($this->delete_file($news['News']['news_img'], 'news')) {
			$this->News->delete($id);
			$this->Session->setFlash("La news à bien été supprimer !", 'notif');
			$this->redirect($this->referer());
		}
	}

	// Activation / Desactivation des news
	public function admin_activated($id) {
		$this->autoRender = true;
		$data = $this->News->find('first', array('conditions' => array('news_id' => $id)));
		$this->News->id = $data['News']['news_id'];
		// Si activé -> désactive sinon tu actives
		($data['News']['news_is_activated'] == 0) ? $this->News->saveField('news_is_activated', 1) : $this->News->saveField('news_is_activated', 0);
		$this->Session->setFlash("La news à bien été activé !", 'notif');
		$this->redirect(array('controller' => 'news', 'action' => 'index', 'admin' => true));
	}

	// Page de listing des news
	public function index() {
		$news = $this->News->find('all', array('conditions' => array('news_is_activated >' => 0)));
		foreach ($news as $key => $value) {
			$news[$key]['News']['slug'] = $this->slug($value['News']['news_title']);
		}
		$this->set('news', $news);
	}

	// Vue pour les news
	public function view($id = null) {
		// Get info sur la news demandé
		$view = $this->News->find('first', array('conditions' => array('news_id' => $id)));
		if($view)
			$this->set('news', $view);
		else
			$this->redirect('/error');

	}
}

?>