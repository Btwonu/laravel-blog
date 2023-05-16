<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
	public function index(): View
	{
		return view('categories/index', [ 'categories' => Category::all() ]);
	}

    public function show($slug): View
	{
		$category = Category::where('slug', $slug)->firstOrFail();
		return view('categories/show', [ 'category' => $category ]);
	}
}
