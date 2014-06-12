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
		$this->set('coach', $this->Coatch->find('first'));
	}

	public function partners(){
		$this->set('partnersTop', $this->Partner->find('all', array('conditions' => array('partner_to_page >' => 0, 'partner_type'=> 1))));
		$this->set('partnersBot', $this->Partner->find('all', array('conditions' => array('partner_to_page >' => 0, 'partner_type'=> 0))));
	}

	public function coachs(){
		$this->set('teams', $this->Team->find('all', array('conditions' => array('team_is_activated >' => 0))));
		$this->set('params', $this->Param->find('first'));
	}

	public function presse(){
	}

	public function actions(){
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
	}

	public function help(){
	}
}

?>