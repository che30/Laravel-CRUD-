<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
class Register extends Controller
{
    //
    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect("/product");
    }

    public function create(): View
    {
        return view('auth.register');
    }
}
