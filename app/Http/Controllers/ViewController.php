<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function homePage()
    {
        return view('pages.home-page');
    }




}
