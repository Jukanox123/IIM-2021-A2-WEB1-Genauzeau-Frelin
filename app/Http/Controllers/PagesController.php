<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = 'Valentin';
        $last = 'Genauzeau';

        $fullname = $first . " " . $last;
        $email = "vgenauzeau@gmail.com";
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
