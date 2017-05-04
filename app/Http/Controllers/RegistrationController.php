<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){

        //Validation
        $messages = [
            'terms_accepted.required' => 'You need to read and agree the BPO VAS Terms of use',
        ];
        $this->validate(request(), [
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'terms_accepted' => 'required'
        ], $messages);

        //Create and save the user
        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'company' => request('company'),
            'phone' => request('phone'),
            'address' => request('address'),
            'city' => request('city'),
            'state' => request('state'),
            'zipcode' => request('zipcode')
        ]);

        //Sign in
        Auth::login($user);

        return redirect()->route('admin');
    }
}
