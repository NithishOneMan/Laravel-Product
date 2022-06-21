<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id','desc')->paginate(100);
        return view('products.index')->with('products', $products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $products = new Product;
        

        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_discription = $request->product_discription;
        if ($request->hasFile('product_image')) {
            $validatedData = $request->validate([
                'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg/max:512',
            ]);
            foreach($request->file('product_image') as $image){
            // $image = $request->file('product_image');
            $new_image_name = date('Y-md-d') . time() . "." . $image->extension();
            $destination_path = public_path("images/");
            $image->move($destination_path, $new_image_name);
            $products->product_image = "images/" . $new_image_name;
        }
    }
        $products->save();
        return redirect('products')->with('flash_message', 'Product Addedd!');
    }


    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show')->with('products', $products);
    }


    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit')->with('products', $products);
    }


    public function update(Request $request,$id,Product $products)
    {
        $products = Product::where('id', $id)->first();
        $input = $request->all();
        $products->update($input);
        if ($request->hasFile('product_image')) {
            $validatedData = $request->validate([
                'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg/max:512',
            ]);
            $image = $request->file('product_image');
            $new_image_name = date('Y-md-d') . time() . "." . $image->extension();
            $destination_path = public_path("images/");
            $image->move($destination_path, $new_image_name);
            $products->product_image = "images/" . $new_image_name;
        }
        $products->save();
        return redirect('products')->with('flash_message', 'Product Updated!');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted!');
    }
}
