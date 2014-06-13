<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Acl',
		'Session',
		'Auth',
	);

	public function beforeFilter() {
		if(!isset($this->request->params['prefix']) || empty($this->request->params['prefix']))
			$this->Auth->allow();
	}

	public function beforeRender() {
		$this->loadModel('Param');
		// Vérification si le site est en maintenance
		$m = $this->Param->find('first', array('conditions' => array('param_id' => 1)));
		if(isset($m) && !empty($m) && $m['Param']['param_is_maintenance'] == true) {
			$this->layout = 'maintenance_default';
			$this->set('msg', $m['Param']['param_message_maintenance']);
		}
		// Gestion des layouts (admin ou login)
		if (isset($this->request->params['prefix']) && !empty($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {
			if ($this->Auth->loggedIn()) {
				$this->layout = 'admin_default';
			}else{
				$this->layout = 'admin_login';
			}
		}
	}

	// Récupérer l'url complète du fichier
	public function get_file($file, $dir) {
		return IMAGES  . '..' . DS . 'files' . DS  . 'images' . DS . $dir . DS . $file;
	}

	// Upload des images
	public function upload_file($file, $dir, $auth_extensions = array('gif', 'jpeg', 'jpg', 'png')) {
		if ($file['error'] == 0) {
			$tmp_name = $file['tmp_name'];
			$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
			if (in_array(strtolower($extension), $auth_extensions)) {
				$name = (string)time() . '.' . $extension;
				if (move_uploaded_file($tmp_name, IMAGES  . '..' . DS . 'files' . DS  . 'images' . DS . $dir . DS . $name) == true)
					return $name;
				return false;
			}
			return false;
		}
		return false;
	}

	// Supprimer une image
	public function delete_file($file, $dir) {
		if (strlen($file) == 0)
			return true;
		if (unlink(IMAGES  . '..' . DS . 'files' . DS  . 'images' . DS . $dir . DS . $file))
			return true;
		return false;
	}
}
