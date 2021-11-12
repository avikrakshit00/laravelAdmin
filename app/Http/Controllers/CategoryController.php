<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.add_category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|min:3|unique:categories|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
            'cat_slug' => 'required|min:3|max:20|unique:categories|regex:/^[a-zA-ZÑñ\s]+$/'
        ],
        [
            'cat_name.required' => 'Category name must be needed',
            'cat_name.unique' => 'Category name already exists',
            'cat_name.min' => 'Category name must be at least 3 charecters',


            'cat_slug.required' => 'Category slug must be needed',
            'cat_name.slug' => 'Category slug must be at least 3 charecters',
            'cat_slug.unique' => 'Category slug already exists',
        ]);

            $category = new Category();
            $category ->cat_name = $request ->cat_name;
            $category ->cat_slug = $request ->cat_slug;

            $category->save();
            return redirect('admin.add_category');
    }




    public function manageCategory()
    {
        return view('admin.manage_category');
    }
}
