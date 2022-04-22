<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
//App\Http\Controllers\Auth\Str
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showRegisterForm()
    {
        return view('auth.admin-register');
    }
    public function register(Request $request)
    {
        //return Hash::make('password');
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $request['password'] = Hash::make($request->password);
        Admin::create($request->all());

        return redirect()->intended(route('admin.dashboard'));
    }
}