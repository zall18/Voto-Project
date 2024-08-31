<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function showAll()
    {
        $data['products'] = User::all();

        return view('AdminView.UserControl', $data);
    }

    public function createUser(Request $request)
    {

        $validation = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(3)->mixedCase()]
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->level),
            'role' => $request->role,
        ]);

        if ($validation) {
            Session::flash('pesan', 'Data berhasil ditambahkan');
        } else {
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('user/userControl');
    }

    public function updateUser(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            // 'password' => ['required', Password::min(3)->mixedCase()]
        ]);

        User::where('id', $request->id_user)->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => bcrypt($request->level),
        ]);

        if ($validation) {
            Session::flash('pesan', 'Data berhasil ditambahkan');
        } else {
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('user/userControl');
    }

    public function deleteUser($id_user)
    {
        User::where('id', $id_user)->delete();
        return redirect('user/userControl')->with('pesan', "Data Berhasil dihapus!");
    }


    public function detailUser(User $user)
    {
        return view('AdminView.userDetail', [
            'title' => 'User Detail',
            'user' => $user
        ]);
    }

    public function createView()
    {
        return view('AdminView.userCreate');
    }

    public function loginCustomerPage()
    {
        return view('CustomerView.loginCustomer');
    }
}
