<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(): View{
User::create([
    'name' => 'Edouard',
    'email'=> 'edouard@doe.fr',
    'password'=> Hash::make('root')
]

);

return view('auth.admin');
    }
}
