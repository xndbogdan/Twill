<?php


namespace App\Http\Controllers;


use App\Models\Page;
use App\Models\Project;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function landing() {
        $pages = Page::published()->get();
        $page = Page::published()->whereTranslation('title','Landing')->first();
        if(!$page) {
            return view('landing');
        }
        else {
            return view('page',compact('page','pages'));
        }
    }
    public function page($locale, $slug) {
        App::setLocale($locale);
        $pages = Page::published()->get();
        $page = Page::published()->whereTranslation('title',$slug,$locale)->first();
        if(!$page){
            return view('errors.404');
        } else {
            return view('page',compact('page','pages'));
        }
    }
}
