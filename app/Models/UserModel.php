<?php namespace App\Model;

use CodeIgniter\Model;

class UserModel extends Model {
	protected $table = 'users';
	protected $DBGroup = 'default';
	protected $allowedFields = ['username', 'email', 'password'];
	protected $useTimestamps = true;
	protected $validationRules = [];
	protected $validationMessages = [];
}