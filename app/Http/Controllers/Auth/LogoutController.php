<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
     
    public function __construct()
    { 
        $this->middleware('auth');
    }

    public function signout(Request $request){
        // dd();
        auth()->logout();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
