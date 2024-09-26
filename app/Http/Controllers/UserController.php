<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function me()
    {
        $data['user'] = User::find(Session::get('id'));
        $data['title'] = 'profile';
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        $data['address'] = Address::where('user_id', Session::get('id'))->first();
        $data['products'] = Product::where('user_id', Session::get('id'))->paginate(4);

        return view('CustomerView.profile', $data);
    }

    public function updatePage()
    {
        $data['user'] = User::find(Session::get('id'));
        $data['address'] = Address::where('user_id', Session::get('id'))->first();
        return view('CustomerView.UpdatePage', $data);
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'street_address' => ['required'],
            'detail_address' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
            'phone' => ['required']
        ]);

        if ($validate) {
            if($request->password != null)
            {
                User::where('id', Session::get('id'))->update([
                    'name' => $request->name,
                    'password' => bcrypt($request->password),
                ]);
            }else{
                User::where('id', Session::get('id'))->update([
                    'name' => $request->name,
                ]);
            }

            Address::where('id', Session::get('id'))->update([
                'street_address' => $request->street_address,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->phone,
                'detail_address' => $request->detail_address
            ]);

            return redirect('/me');
        } else {
            Alert::toast("Please fill the field correctly", "danger");
            return back();
        }
    }
}

