<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    //

    public function index(){
        return view('components.frontend.template.blog.dummy');
    }
}
