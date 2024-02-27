<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
	public function index()
	{
		auth()->logout();
		return 'welcome';
	}
}
