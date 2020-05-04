<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('main');
	}

	public function about()
	{
		return view('about');
	}

	public function home()
	{
		return view('home');
	}
}
