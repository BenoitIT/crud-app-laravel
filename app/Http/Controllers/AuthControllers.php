<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthControllers extends Controller
{
    //user related functions
    public function login()
    {
        return view('auth/login');
    }
    public function rigister()
    {
        return view('auth/signup');
    }
    public function save(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:10',

        ]);
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $save = $User->save();

        return redirect('/login');
        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'your account has been created successfully!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'There was a failure while sending the data!');
    }
    public function check(request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:10|min:5'
        ]);

        if (auth()->attempt(array('email' => $request->email, 'password' => $request->password))) {

            return redirect('/addnew')->with('success', 'welcome Admin');
        }
        return redirect('/login')->with('error','incorrect username and password');
    }
}
