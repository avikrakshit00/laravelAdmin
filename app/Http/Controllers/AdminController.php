<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view ('admin.index');
    }

    public function loginSuccess(Request $request) // Have to resolve
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email must be required',
            'password.required' => 'Password must be required',

        ]);
        $admin = Adminlogin::where('email','=',$request->email)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('loginId', $admin->id);
                return redirect('admin.dashboard');
            }
            else{
                return "hi";
            }
        }
        else{
            return "Hello";
        }
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
            $registrationForm ->password = Hash::make($request->password);
            $registrationForm ->cpassword = Hash::make($request ->cpassword);

            $registrationForm->save();
            return redirect('admin.register');
    }

    public function dashboard()
    {
        return view ('admin.dashboard');
    }
}
