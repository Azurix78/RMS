<?php

class HomeController extends AppController {

	public $uses = array('Action', 'News', 'Partner', 'Slider', 'Team', 'Param', 'Coach', 'Social');

	public function index() {
		$this->set('param', $this->Param->find('first', array('conditions' => array())));
		$this->set('socials', $this->Param->find('all', array('conditions' => array())));
		$this->set('news', $this->News->find('all', array('conditions' => array())));
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
		$this->set('sliders', $this->Slider->find('all', array('conditions' => array())));
		$this->set('partners', $this->Partner->find('all', array('conditions' => array())));
	}

	public function coaching() {
		$this->set('coachs', $this->Coach->find('first'));
	}

	public function actions(){
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
	}

	public function help(){
	}
}

?>