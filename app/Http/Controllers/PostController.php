<?php namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller{
    public function getShow($slug) {
        $post= Post::where('slug', '=', $slug)->get();
        
        return view('show')->with('post',$post);
        //the slug of the url is correlated with the title of the article and displayed in the view show.blade.php//
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

