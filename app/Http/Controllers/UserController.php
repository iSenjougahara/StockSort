<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        
       
       if(Auth::attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('index')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
            //return view('index');
        
   

       
        
    }
    public function store(Request $request)  {
        
         $formFields = $request->validate([
             'name' => 'required| min:3',
             'email' => 'required',Rule::unique('users','email'),
             'password' => 'required|min:6',
            'cargo'=>'required'
         ]);
       

        
         $formFields['password'] = bcrypt($formFields['password']);
        
        // // Create User
        $user = User::create($formFields);

        // // Login
        

        auth()->login($user);
         
        return redirect('index')->with('message', 'User created and logged in');
    
        
    
       
    }

    public function logout(Request $request) {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('welcome')->with('message', 'User Logged out');

    }

    public function show() {

       return view('index')->with('users',User::all());

    }
}
