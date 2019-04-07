<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $request){
    	$dados = $request->all();
    	$email = $dados['email'];
    	$passw = $dados['password'];
    	if(Auth::attempt(['email'=>$email,'password'=>$passw])){
    		return redirect()->route('admin.principal');
    	}
    	return redirect()->route('site.home');
    }
}
