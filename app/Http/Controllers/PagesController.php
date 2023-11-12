<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{ 
    public function home()
    {
        $newses = News::latest()->take(3)->get();
        return view("pages.home.index",["newses" => $newses]);
    }

    
    public function about()
    {
        return view("pages.about");
    }
    public function offer()
    {
        return view("pages.offer");
    }
    public function newses()
    {
        $newses = News::latest()->get();
        return view("pages.newses",["newses" => $newses]);
    }
    public function contact()
    {
        return view("pages.contact");
    }

    public function realisations()
    {
        
        return view("pages.realisations");
    }
    public function gallery()
    {
        return view("pages.gallery");
    }
    public function singleNews(News $news)
    {
        return (view('pages.singleNews', ['news' => $news]));
    }
}
