<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;


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
            'cat_slug.min' => 'Category slug must be at least 3 charecters',
            'cat_slug.unique' => 'Category slug already exists',
        ]);

            $category = new Category();
            $category ->cat_name = $request ->cat_name;
            $category ->cat_slug = $request ->cat_slug;

            $category->save();
            Toastr::success('Category added successfully', 'Success');
            return redirect()->back();
    }

    public function manageCategory()
    {
        return view('admin.manage_category');
    }

    public function showCategory()
    {
        $category = Category::paginate(10);
        return view('admin.manage_category', compact('category'));
    }

    public function editCategory($id)
    {
        $categories = Category::find($id);
        if(is_null($categories)){
            return redirect('admin/category/manage');
        }
        else
        {
            $data = compact('categories');
            return view('admin.edit_category')->with($data);
        }
    }

    public function updateCategory(Request $request ,$id)
    {
        $categories = Category::find($id);
        $categories ->cat_name = $request ->cat_name;
        $categories ->cat_slug = $request ->cat_slug;

        $categories->update();
        Toastr::success('Category updated successfully', 'Success');
        return redirect('admin/category/manage');

    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category ->delete();
        Toastr::success('Category deleted successfully', 'Success');
        return redirect()->back();
    }
}
