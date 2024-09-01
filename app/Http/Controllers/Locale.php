<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Locale extends Controller
{
    
 public function __invoke(): RedirectResponse
    {
        session(['locale' => request('locale')]);
        return redirect()->back();
    }
}
