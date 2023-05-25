<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
	public function index(Request $request): View
	{
		$posts = Post::latest()->with('tags')->filter(['search' => $request->search, 'category' => $request->category, 'tags' => $request->tags]);
		$categories = Category::all();
		$tags = Tag::all();

		return view('posts/index', [ 'posts' => $posts->get(), 'categories' => $categories, 'tags'=> $tags ]);
	}

    public function show($id): View
	{
		$post = Post::find($id);
		$comments = $post->comments()->with('user')->get();

		return view('posts/show', [ 'post' => $post, 'comments' => $comments ]);
	}

	public function create(): View
	{
		$categories = Category::all();
		return View('posts/create', [ 'categories' => $categories]);
	}

	public function store(Request $request)
	{

		$formFields = $request->validate([
			'title' => 'required|unique:posts|min:5|max:255',
			'body' => 'required|min:10|max:65535',
			'category' => 'required',
			'image' => 'image|mimes:jpeg,png,jpg|max:2048'
		]);
		
		$user = auth()->user();
		$image = $formFields['image'];

		if ($image) {
			$path = Storage::disk('public')->put('images', $image);
			$imageUrl = Storage::disk('public')->url($path);
		}

		$post = new Post();
		$post->title = $formFields['title'];
		$post->body = $formFields['body'];
		$post->category_id = $formFields['category'];
		$post->user_id = $user->id;
		$post->img_url = $imageUrl;
		$post->save();
		
		return redirect(route('home'));
	}
}