<?php

class ContactController extends AppController {

	public $uses = array('Param', 'Contact');
	var $components = array('Email', 'Session');
	private $_captcha = array('c56Ba', 'p90zE', 'm78c9');

	// Edition des informations de contact
	public function admin_edit() {
		// Get informations de la page contact
		$contactInfo = $this->Param->findByParamId(1);

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Param->id = 1;
	        if ($this->Param->save($this->request->data)) {
	            $this->Session->setFlash(__('Informations mises à jour.'));
	            return $this->redirect(array('action' => 'edit'));
	        }
	        $this->Session->setFlash(__('Erreur lors de la modification.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $contactInfo;
	    }
	}

	// Page contact
	public function index(){
		
		$data = $this->Param->findByParamId(1);
		$this->set('data', $data);

		if ($this->request->is(array('post', 'put'))) {
			$contact = $this->request->data;

			if($this->checkCaptcha($contact['captcha'])){
				$this->Contact->set($this->request->data);
				if ($this->Contact->validates()) {

					App::uses('CakeEmail', 'Network/Email');


					// Creation du message et envoi du mail
					$message  = 'Vous avez reçu un message depuis le site RéussirMoiAussi.fr :<br>';
					$message .= 'Nom / Prénom : ' . $contact['name'] . '<br>';
					$message .= 'Mail : ' . $contact['mail'] . '<br>';
					$message .= 'Telephone : ' . $contact['tel'] . '<br>';
					$message .= 'Objet : ' . $contact['object'] . '<br>';
					$message .= 'Message : <br>' . $contact['message'];

				    $this->Email->to = $data['Param']['param_mail_contact'];
					$this->Email->subject = '[ReussirMoiAussi] ' . $contact['object'];
					$this->Email->from = 'noreply@reussirmoiaussi.fr';
					$this->Email->smtpOptions = array(
					'port'=>'465',
					'timeout'=>'30',
					'host' => 'ssl://smtp.gmail.com',
					'username'=>'reussirmoiaussismtp@gmail.com',
					'password'=>'smtprma75',
					);
					$this->Email->delivery = 'smtp';
					if ($this->Email->send($message)) {
						$this->Session->setFlash(__('Message envoyé'));
					} else {
						$this->Session->setFlash(__($this->Email->smtpError));
					}
				}
				else{
					$this->set('errors', $this->Contact->validationErrors);
				}
			}
			else
			{
				$this->Session->setFlash("Captcha incorrect", 'notif', array('type' => 'error'));
			}
		}

		$this->set('captcha', rand(0,2));

	}

	private function checkCaptcha($value){
		if(in_array($value, $this->_captcha))
			return true;
		else
			return false;
	}
}

?>