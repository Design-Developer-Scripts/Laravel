<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $content = Blog::select()->orderBy('created_at', 'desc')->paginate(7);
        return view('components.frontend.template.blog.index',compact('content'));
    }

    public function singel(string $slug){
        $content = Blog::select()->where('slug',$slug)->get()->first();
        return view('components.frontend.template.blog.singel',compact('content'));
    }
}
