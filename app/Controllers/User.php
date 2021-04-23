<?php
namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RequestInterface;

class User extends BaseController {
	private $userModel      = null;
	private $profileModel   = null;

	public function __construct () {
		$this->userModel    = new UserModel();
		$this->profileModel = new ProfileModel();
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
	public function profile($id) {
		//$profile = $this->userModel->join ('profiles', 'profiles.user_id = users.id')->find ($id);
		$profile = $this->profileModel->where('user_id', $id)->first ();
		if (!$profile) {
			throw PageNotFoundException::forPageNotFound ('User Not Found');
		}
		return view ('profile', $profile);
	}
	public function update($id = null) {
		$profile = $this->profileModel->find ($id);
		if (!$profile or $profile['user_id'] != session()->get('user')['id']) {
			$this->session->setFlashData('message', 'You can not Update this user');
			return redirect ()->back ()->withInput ();
		}
		if (!$this->profileModel->update ($id, $this->request->getPost ())) {
			$this->session->setFlashData('errors', $this->profileModel->errors ());
			return redirect ()->back()->withInput ();
		}
		$this->session->setFlashData('message', 'Profile Updated Successfully');
		return redirect ()->to ('/users/'.$id.'/profile');
	}
}