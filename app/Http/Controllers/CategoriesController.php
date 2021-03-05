<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Http\Requests\StoreCategoriesPost;
use App\Http\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function addCategoriesView()
    {
        return view('addCategories');
    }
    public function addCategoriesForm(StoreCategoriesPost $request)
    {
        $categories = Category::create($request->validated());
        return redirect()->back();
    }
    public function categoriesSave(Category $categories, StoreCategoriesPost $request)
    {
        $categories->fill($request->validated());
        $categories->save();
        return redirect()->back();
    }
    public function showCategories()
    {
        $articles = Category::query()->all()->paginate(3);
        return  ;
    }
}
