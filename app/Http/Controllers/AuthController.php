<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
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
        } else {
            return redirect('/');
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

    public function registerPage()
    {
        return view('CustomerView.register');
    }

    public function registerProsess(Request $request)
    {

        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:6'],
            'repassword' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'street_address' => ['required'],
            'detail_address' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
            'phone' => ['required']
        ]);

        if ($validate) {

            if ($request->password == $request->repassword) {
                $lastId = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    "role" => "customer"
                ])->id;

                Address::create([
                    'user_id' => $lastId,
                    'street_address' => $request->street_address,
                    'city' => $request->city,
                    'state' => $request->state,
                    'postal_code' => $request->postal_code,
                    'country' => $request->country,
                    'phone' => $request->phone,
                    'detail_address' => $request->detail_address
                ]);

                $validate = $request->validate([
                    'email' => ['required'],
                    'password' => ['required']
                ]);


                if (Auth::attempt($validate)) {
                    $user = Auth::user();

                    $request->session()->put("name", $user->name);
                    $request->session()->put("id", $user->id);
                    $request->session()->put("role", $user->role);
                    return redirect('/home');

                } else {
                    return redirect('/loginCustomer');
                }

            } else {
                Alert::toast("Confirm password is not correct!");
                return back();
            }

        } else {
            Alert::toast("Please fill the field correctly", "danger");
            return back();
        }
    }

    public function loginCustomer(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        // $user = User::where('email', $request->email)->first();

        // if ($user) {
        if (Auth::attempt($validate)) {
            $user = Auth::user();

            $request->session()->put("name", $user->name);
            $request->session()->put("id", $user->id);
            $request->session()->put("role", $user->role);
            return redirect('/home');

        } else {
            return redirect('/loginCustomer');
        }
    }

    public function logoutCustomer()
    {
        Auth::logout();
        return redirect('/loginCustomer');
    }

    public function Unauthorize()
    {
        $data['products'] = Product::orderByDesc('id')->paginate(8);
        $data['highlight'] = Product::orderByDesc('id')->where('stock', ">", 0)->where('is_publish', true)->paginate(2);
        return view('CustomerView.homeUnauthorize', $data);
    }
}
