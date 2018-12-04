<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

	public function index(){
		return view('index');
	}

	public function login(){
		return view('login');
	}
	public function inicial(){
		 $disciplinas = \App\Disciplina::all();
		 return view('inicial', compact('disciplinas'));
	}
}
