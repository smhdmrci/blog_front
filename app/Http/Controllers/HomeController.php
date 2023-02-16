<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('index',compact(['blogs','categories']));

    }

    public function getBlogsByCategory(Category $category)
    {
        $blogs = Blog::query()
            ->where('categories',$category->id)
            ->get();

        $categories = Category::all();
        return view('category',compact(['blogs','categories','category']));
    }

    public function getBlog(Blog $blog)
    {
        $categories = Category::all();
        return view('blog',compact(['blog','categories']));
    }

}
