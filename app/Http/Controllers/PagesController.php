<?php


namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function landing(){
        return view('landing');
    }
}
