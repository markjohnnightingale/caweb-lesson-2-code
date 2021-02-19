<?php

namespace App\Controllers;

use App\Services\View;

class Error404Controller
{
	public function index()
	{
		View::load('404');
	}
}
