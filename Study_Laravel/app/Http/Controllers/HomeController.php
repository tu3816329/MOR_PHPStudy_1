<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
class HomeController extends Controller
{
    public function index(){
        $news = News::all()->toArray();
        return view ('homepage')->with('news',$news);
    }
}
