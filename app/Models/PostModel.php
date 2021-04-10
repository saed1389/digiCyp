<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model {
	protected $table = 'posts';
	protected $DBGroup = 'default';
	protected $allowedFields = ['title', 'content', 'thumbnail', 'category_id'];
	protected $useTimestamps = true;
	protected $validationRules = [];
	protected $validationMessages = [];
}