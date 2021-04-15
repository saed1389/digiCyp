<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
	protected $table = 'users';
	protected $DBGroup = 'default';
	protected $primaryKey = 'id';
	protected $allowedFields = ['username', 'email', 'password', 'name'];
	protected $useTimestamps = true;
	protected $validationRules = [
		'username'  => 'required|alpha_numeric|min_length[3]',
		'name'      => 'required|alpha_numeric_space|min_length[3]',
		'email'     => 'required|valid_email|is_unique[users.email]',
		'password'  => 'required|min_length[4]',
		'password_confirmation' => 'required|matches[password]',
	];
	protected $validationMessages = ['password_confirmation' => ['required' => 'Password Confirmation is Require', 'matches' => 'Password field does not Match']];
	protected $beforeInsert = ['hashPassword'];
	protected $afterInsert = ['updateProfile'];
	public function transBegin() {
		return $this->db->transBegin();
	}
	public function transRollback() {
		return $this->db->transRollback();
	}
	public function transCommit() {
		return $this->db->transCommit();
	}
	public function hashPassword($data) {
		$data['data']['password'] = password_hash ($data['data']['password'], PASSWORD_DEFAULT);
		session()->setFlashdata('name', $data['data']['name']);
		unset($data['data']['name']);
		return $data;
	}
	public function updateProfile($data) {
		$userProfile = new ProfileModel();
		$userProfile->insert(['user_id' => $data['id'], 'name' => session ('name')]);
		session ()->remove ('name');
	}
	public function authenticate($user) {
		$password = $user['password'];
		$user    = $this->getWhere (['email' => $user['email']]);
		
		if ($user->resultID->num_rows > 0) {
			$user   = $user->getRow ();
			$verify = password_verify ($password, $user->password);
			if ($verify) {
				return ['username' => $user->username, 'email' => $user->email, 'isLoggedIn' => true];
			} else {
				return false;
			}
		}
		return false;
	}
}