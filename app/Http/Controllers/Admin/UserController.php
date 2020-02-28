<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
	public function index()
	{
		$data['user']=User::all();
		return view('admin.user.list',$data);
	}
}
