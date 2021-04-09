<?php namespace App\Controllers;

class Page extends BaseController {
	
	public function about($param = "Guest") {
		$data = [
			'name' => 'Saed Ghaffari'
		];
		return view ('about', $data);
	}
	
	public function contact(){
		$data = [
			'email' => 'saed.1389@gmail.com'
		];
		return view ('contact', $data);
	}
}