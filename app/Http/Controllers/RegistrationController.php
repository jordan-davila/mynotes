<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name'     => 'required|min:6',
            'email'    => 'required|email',
            'password' => 'required|
			               min:6|
			               confirmed',
        ]);

        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}
