<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.add_category');
    }


    public function manageCategory()
    {
        return view('admin.manage_category');
    }
}
