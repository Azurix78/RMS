<?php

class HomeController extends AppController {

	public $uses = array('Action', 'News', 'Partner', 'Slider', 'Team', 'Param', 'Coach', 'Social');

	public function index() {
		$this->set('param', $this->Param->find('first', array('conditions' => array())));
		$this->set('socials', $this->Social->find('all', array('conditions' => array())));
		$this->set('news', $this->News->find('all', array('conditions' => array('news_is_activated >' => 0),'limit' => 4)));
		$this->set('actions', $this->Action->find('all', array('conditions' => array('action_is_activated >' => 0),'limit' => 10)));
		$this->set('sliders', $this->Slider->find('all', array('conditions' => array('slider_is_activated >' => 0 ))));
		$this->set('partners', $this->Partner->find('all', array('conditions' => array('partner_to_home >' => 0))));
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