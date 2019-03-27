<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // get index page (/)
    public function getIndex() {
        return view('pages.index');
    }

     // get index page (/)
     public function getAbout() {
        return view('pages.about');
    }
}
