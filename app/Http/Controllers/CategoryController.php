<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index() {
        $data['categories'] = Category::paginate(10);
        return view('AdminView.CategoryControl', $data);
    }

    public function delete(Request $request)
    {
        $category = Category::where('id', $request->id);
        if($category->count() > 0){
            $category->delete();
            return back();
        }
    }

    public function create(Request $request) {
        $validate = $request->validate([
            'name' => ['required'],
            'slug' => ['required']
        ]);


        if($validate)
        {
            Category::create([
                'name' => $request->name,
                'slug' => $request->slug
            ]);

            Alert::toast('Success to add category', 'success');
            return back();
        }



    }
}
