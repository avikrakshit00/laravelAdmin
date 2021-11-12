<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function login()
    {
        return view ('admin.index');
    }

    public function register()
    {
        return view ('admin.register');
    }

    public function registrationForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
            'email' => 'required |email|unique:adminlogins|regex:/([\w\-]+\@[\w\-]+\.[\w\-]+)/',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password'
        ],
        [
            'name.required' => 'Username must be needed',
            'name.min' => 'Username must be at least 3 charecters',
            'name.max' => 'Username must be maximum 20 charecters',
            'name.regex' => 'Username should contain only alphabates',

            'email.required' => 'Email must be needed',
            'email.unique' => 'Email already exists',
            'email.regex' => 'Email format is not valid',

            'password.required' => 'Password must be needed',
            'password.min' => 'Password must be at least 6 charecters',

            'cpassword.required' => 'Confirm Password must be needed',
            'cpassword.same' => "Confirm Password doesn't match",
        ]);

            $registrationForm = new Adminlogin;
            $registrationForm ->name = $request ->name;
            $registrationForm ->email = $request ->email;
            $registrationForm ->password = md5($request ->password);
            $registrationForm ->cpassword = md5($request ->cpassword);

            $registrationForm->save();
            return redirect('admin.register');
    }

    public function dashboard()
    {
        return view ('admin.dashboard');
    }
}
