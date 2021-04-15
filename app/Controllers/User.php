<?php
namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;

class User extends BaseController {
	private $userModel      = null;

	public function __construct () {
		$this->userModel    = new UserModel();
	}
	
	public function register() {
		
		$this->userModel->transBegin ();
		if (!$this->userModel->insert ($this->request->getPost ())) {
			$this->session->setFlashData('errors', $this->userModel->errors ());
			return redirect () ->to ('register')->withInput ();
		}
		$this->userModel->transCommit();
		$this->session->setFlashData('message', 'User Registered Successfully');
		return redirect ()->to ('login');
	}
	public function login() {
		$email      = $this->request->getPost ('email');
		$password   = $this->request->getPost ('password');
		$user       = $this->userModel->authenticate ($this->request->getPost ());
		if ($user) {
			$this->session->set('user', $user);
			$this->session->setFlashData('message', 'Logged In Successfully');
			return redirect ()->to ('home');
		}
		$this->session->setFlashData('error', 'Unknown Email Or Password');
		return redirect ()->to ('login')->withInput ();
	}
	public function logout() {
		$this->session->remove('user');
		$this->session->setFlashData('message', 'LoggedOut Successfully');
		return redirect ()->to ('login');
	}
	
}