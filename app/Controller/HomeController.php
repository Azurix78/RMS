<?php

class HomeController extends AppController {

	public $uses = array('Action', 'News', 'Partner', 'Slider', 'Team', 'Param', 'Coach');

	public function index() {
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
		$this->set('sliders', $this->Slider->find('all', array('conditions' => array())));
		$this->set('partners', $this->Partner->find('all', array('conditions' => array())));
	}

	public function news() {
		$this->set('news', $this->News->find('all', array('conditions' => array('news_is_activated >' => 0))));
	}

	public function coaching() {
		$this->set('coachs', $this->Coach->find('first'));
	}

	public function coachs(){
		$this->set('teams', $this->Team->find('all', array('conditions' => array('team_is_activated >' => 0))));
		$this->set('params', $this->Param->find('first'));
	}

	public function actions(){
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
	}

	public function help(){
	}
}

?>