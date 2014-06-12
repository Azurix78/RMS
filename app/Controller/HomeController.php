<?php

class HomeController extends AppController {

	public $uses = array('Action', 'News', 'Partner', 'Slider', 'Team', 'Param', 'Coach');

	public function index() {
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