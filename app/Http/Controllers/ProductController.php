<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    public function addProduct()
    {
        $product = Category::all();
        return view ('admin.add_product')->with('product', $product);
    }

    public function storeProduct(Request $request) // Have to solve inser issue...No error... //
    {
        return $request->input();
        $request->validate([
            'pro_name' => 'required|min:3|unique:products|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
            'pro_desc' => 'required|min:20',
            'cat_id'=>'required',
            'pro_price' => 'required|min:2'
        ],
        [
            'pro_name.required' => 'Product name must be needed',
            'pro_name.unique' => 'Product name already exists',
            'pro_desc.required' => 'Product description must be needed',
            'pro_desc.max' => 'Product description must be at least 20 charecters',



            'cat_id.required' => 'Category name must be needed',
            'pro_price.required' => 'Product price must be needed',
            'pro_price.min' => 'Product price must be at leasr 2 digits',
        ]);

            $products = new Product();
            $products->pro_name = $request ->pro_name;
            $products->pro_desc = $request->pro_desc;
            $products->cat_id = $request->cat_id;
            $products->pro_price = $request->pro_price;

            $products->save();
            Toastr::success('Product added successfully', 'Success');
            return redirect()->back();


    }



    public function manageProduct()
    {
        return view ('admin.manage_product');
    }
}
