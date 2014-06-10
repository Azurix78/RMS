<?php

class HomeController extends AppController {

	public $uses = array('Action', 'News', 'Partner', 'Slider');

	public function index() {
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
		$this->set('sliders', $this->Slider->find('all', array('conditions' => array())));
		$this->set('partners', $this->Partner->find('all', array('conditions' => array())));
	}

	public function news() {
		$this->set('news', $this->News->find('all', array('conditions' => array('News.news_is_activated >' => 0))));
	}

	public function coaching() {
	}

	public function partners(){
		$this->set('partners', $this->Partner->find('all', array('conditions' => array())));
	}

	public function coachs(){
	}

	public function presse(){
	}

	public function actions(){
		$this->set('actions', $this->Action->find('all', array('conditions' => array())));
	}

	public function help(){
	}

	public function contact(){
	}
}

?>