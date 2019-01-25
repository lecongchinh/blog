<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
	public function getAdmin() {
		return view('admin.layout');
	}

	public function getCategories() {
		return view('admin.categories');
	}
}
