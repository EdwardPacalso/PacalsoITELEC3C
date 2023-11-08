<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        // $category = new Category;

        // $category->category_name = $request->input('category_name');

        // $category->save();

        // return redirect('/all category');
        Category::addCategory($request->category_name);

        return redirect()->route('AllCat');
    }
}
