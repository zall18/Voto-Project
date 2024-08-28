<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use View;

class AuthController extends Controller
{
    public function dashboard()
    {
        $data['userCount'] = User::count();
        $data['categoryCount'] = Category::count();
        $data['productCount'] = Product::count();
        $data['transCount'] = 12;
        return view('AdminView.dashboard', $data);
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        // $user = User::where('email', $request->email)->first();

        // if ($user) {
        if (Auth::attempt($validate)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                $request->session()->put("name", $user->name);
                $request->session()->put("id", $user->id);
                return redirect('/dashboard');
            } else {
                Auth::logout();
                return redirect('/');
            }
        }
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function loginPage()
    {
        return View('auth');
    }
}
