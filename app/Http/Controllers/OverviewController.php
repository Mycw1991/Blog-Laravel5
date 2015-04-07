<?php namespace App\Http\Controllers;


use App\Post;

class OverviewController extends Controller {
    
    public function index()
	{
	$posts = Post::where('draft', '=', 0)->get();
        // no draft on the home page
        
      
        
        return view('overview')->with('posts', $posts);
	}

}

