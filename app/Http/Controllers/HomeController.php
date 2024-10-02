<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
    // ================================== Event ==================================
        $events = Event::all();

    // ================================== News ==================================
        $news = News::all();

        return view('home', [
            'events' => $events,
            'news' => $news
        ]);

//        return dd($news);
    }
}
