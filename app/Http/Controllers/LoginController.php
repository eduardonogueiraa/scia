<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class LoginController extends Controller
{

/*	public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } */

  	public function autenticar(Request $request)
    {
        $credenciais = $request->only('email','password');
        if (Auth::attempt ($credenciais)) {
            $user = User::get()
                ->where('email',$credenciais['email'])
                ->first();

            if (isset($user)) {

                if ($user->tipo == "usuario") {
                    return redirect()->to(
                        route('inicial'));

                }else if($user->tipo == "admin"){
                    return redirect()->to(
                        route('disciplina'));
                }
            } 

        } else {
            return redirect()->to('login');
        }
    }

    public function logout(Request $request)
    {
    	Auth::logout();
    	$request->session()->flush();
    	return redirect()->to(route('index'));
    }
}
