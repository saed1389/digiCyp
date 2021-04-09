<?php namespace App\Controllers;

class Page extends BaseController {
	
	public function about($param = "Guest") {
		$data = [
			'name' => 'Saed Ghaffari',
			'title' => 'About Us'
		];
		echo view ('about', $data);
	}
	
	public function contact(){
		$data = [
			'email' => 'saed.1389@gmail.com',
			'title' => 'Contact Us'
		];
		echo view ('contact', $data);
	}
}