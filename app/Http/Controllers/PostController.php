<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {

    	// $this->authorize('edit-all');
    	$this->authorize('view-post', 'edit-all');

    	$post = \App\Post::findOrFail($id);


    	return view('post_show', compact('post'));
    }
}
