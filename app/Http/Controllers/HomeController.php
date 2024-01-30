<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function add_product(Request $request)
    {
        $request->validate(
            [
                'title' => 'required | min:6 | unique:products',
                'description' => 'required | max:50',
                'image' => 'required | image|mimes:jpg,png,jpeg,svg|max:2048'
            ],
            [
                'title.required' => 'title is required bla bla bla',
                'title.mid' => 'You must enter atleast 6 characters!',
                'description.required' => 'description is required bla bla bla',
                'image.required' => 'image is required bla bla bla',
            ]
        );
        $data = new Product;

        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('product', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function show_product()
    {
        $data = Product::all();
        return view('product', compact('data'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_product($id)
    {
        $product = Product::find($id);
        return view('product_update', compact('product'));
    }

    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('product', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }
}
