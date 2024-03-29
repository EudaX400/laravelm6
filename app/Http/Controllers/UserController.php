<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(int $user_id): View {

       $user = User::find($user_id);
       
        return view('welcome', ['user' => $user]);

    }
}
