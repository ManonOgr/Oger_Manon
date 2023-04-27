<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
//methode for login
public function admin(){
    return view('auth.admin');
}

public function doAdmin(AdminRequest $request){
    $credentials = $request ->validated();

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended(route('dashboard'));
    };

    return to_route('auth.admin')->withErrors([
        'email' => 'Email invalide'
    ])->onlyInput('email');

}

public function logout(){

Auth::logout();
return to_route('home');
}

}
