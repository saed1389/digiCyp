<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		$data = [
			'title' =>  lang ('seoPage.aboutT'),
			'description' => lang ('seoPage.aboutD')
		];
		return view('about', $data);
	}
	
	public function contact(){
		//$email = \Config\Services::email();
		$data = array (
			'email'     => 'saed.1389@gmail.com',
			'title'     => lang ('seoPage.contactT'),
			'description' => lang ('seoPage.contactD'),
			'validator' => null,
		);
		return view ('contact', $data);
	}
	
	public function localSeo() {
		$date = [
			'title' => lang ('seoPage.localT'),
			'description' => lang ('seoPage.localD')
		] ;
		return view ('localSeo', $date);
	}
	public function emailMarketing() {
		$date = [
			'title' => lang ('seoPage.emailT'),
			'description' => lang ('seoPage.emailD')
		] ;
		return view ('emailMarketing', $date);
	}
	public function socialMediaMarketing() {
		$date = [
			'title' => lang ('seoPage.socialT'),
			'description' => lang ('seoPage.socialD')
		];
		return view ('socialMediaMarketing', $date);
	}
	public function SearchEO() {
		$date = [
			'title' => lang ('seoPage.seoT'),
			'description' => lang ('seoPage.seoD')
		];
		return view ('SearchEO', $date);
	}
	public function webDesign() {
		$date = [
			'title' => lang ('seoPage.webT'),
			'description' => lang ('seoPage.webD')
		];
		return view ('webDesign', $date);
	}
	public function videoEdit() {
		$date = [
			'title' => lang ('seoPage.videoT'),
			'description' => lang ('seoPage.videoD')
		];
		return view ('videoEdit', $date);
	}
	public function services() {
		$date = [
			'title' => lang ('seoPage.serviceT'),
			'description' => lang ('seoPage.serviceD')
		];
		return view ('services', $date);
	}
	public function references() {
		$date = [
			'title' => lang ('seoPage.refT'),
			'description' => lang ('seoPage.refD')
		];
		return view ('references', $date);
	}
	public function blog() {
		$date = [
			'title' => lang ('seoPage.blogT'),
			'description' => lang ('seoPage.blogD')
		];
		return view ('blog', $date);
	}
}
