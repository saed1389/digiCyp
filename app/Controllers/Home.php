<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		//$query  = $this->db->query ("SELECT * FROM users WHERE id = 1");
		//$results = $query->getRow();
		//$query = $this->db->table('users')->where(['id' => 2])->get();
		//$results = $query->getRowArray();
		//echo $this->db->table('users')->countAll() . '<br>';
		//$table = $this->db->table('users');
		//$table->select('username', 'email');
		//$query = $table->get();
		//$results = $query->getRowArray();
		//$table = $this->db->table('users');
		//$query = $table->getWhere(['id' => 1]);
		//$results = $query->getRow();
		//var_dump ($results);
		//return view('welcome_message');
		
		//$userModel = new \App\Model\UserModel();
		//$userModel = model ('App\Model\UserModel', false, $this->db);
		//$userModel = model ('App\Model\UserModel');
		$userModel = new UserModel();
		$user = $userModel->find (1);
		$user['email'] = 'test@admin.com';
		$userModel->save ($user);
//		$date = [
//			'username' => 'admin',
//			'password' => password_hash ('secret', PASSWORD_DEFAULT),
//			'email'    => 'admin@admin.com'
//		];
//		$user = $userModel->insert ($date);
		var_dump ($user);
	}
}
