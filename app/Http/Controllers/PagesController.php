<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getHomePage(){
        $post = Post::all();
        return View('pages.home')->withPost($post);
    }
    public function getAboutPage(){
        return View('pages.about');
    }
    public function getContactPage(){
        return View('pages.contact');
    }
    public function getDetailPost(){
        return View('pages.post');
    }
}
